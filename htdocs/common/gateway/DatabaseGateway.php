<?php

/**
 * Base class for classes that provide access to the database (gateway classes)
 */
abstract class DatabaseGateway
{
    /**
     * Fetches an array of objects that matches the given criteria from the database.
     * @param array|null $params Array of query parameters or null if all entries should be returned,
     *                          for example: ["id" => id, "other_column" => "some_value"]
     * @return array An array of objects containing all objects that match the given criteria
     */
    public static abstract function fetchAll(?array $params = null): array;

    /**
     * Identical to fetchAll(), but only returns the first result.
     * Useful when fetching an object by its ID.
     * @param array|null $params Array of query parameters or null if all entries should be returned,
     *                          for example: ["id" => id, "other_column" => "some_value"]
     * @return object The first object that matches the given criteria, or null of none was found.
     */
    public static abstract function fetch(?array $params = null);

    /**
     * Creates a new entry in the database using the data from the given object.
     * The ID field is ignored when the entry is created since a free one will be assigned automatically.
     * @param object $object The source object
     * @return int The ID of the newly created entry
     */
    public static abstract function create(object $object): int;

    /**
     * Updates the entry in the database corresponding to the given object using the data from the given object.
     * @param object $object The object to update
     */
    public static abstract function update(object $object): void;

    /**
     * Deletes the entry in the database corresponding to the given object.
     * @param object $object The object to delete
     */
    public static abstract function delete(object $object): void;

    protected static function fetchFromTable($tableName, &$params): array
    {
        $sql = "SELECT * FROM `".$tableName."`";

        if($params != null) {
            $orderSql = "";
            if(isset($params["_ORDER_ASC"])) { // Now with result sorting!
                $orderSql .= " ORDER BY `".$params["_ORDER_ASC"]."` ASC ";
                unset($params["_ORDER_ASC"]);
            } elseif (isset($params["_ORDER_DESC"])) {
                $orderSql .= " ORDER BY `".$params["_ORDER_DESC"]."` DESC ";
                unset($params["_ORDER_DESC"]);
            }

            if(count($params) > 0) {
                $sql .= " WHERE ";
                $first = true;
                foreach ($params as $key => $value){
                    $sql .= (!$first ? " AND " : "")."`".$key."` = :".$key;
                    $first = false;
                }
            }

            $sql .= $orderSql;
        }

        $result = DB::get()->run($sql, $params)->fetchAll();

        return $result;
    }
}