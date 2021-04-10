<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/utility/DB.php";
include_once "common/model/BlockAttribute.php";
include_once "common/model/TextAttribute.php";
include_once "common/model/FileAttribute.php";
include_once "common/gateway/BlockGateway.php";

class AttributeGateway extends DatabaseGateway
{
    public static function fetchAll(?array $params = null): array
    {
        /*
         * This fetches attributes and, depending on whether there is a text/file attribute in the DB with the same ID,
         * returns an instance of TextAttribute or FileAttribute.
         * */

        $sql = "SELECT a.id AS 'id', a.block AS 'block', a.name AS 'name', ta.text AS 'text', fa.file AS 'file'
                FROM attribute a
                LEFT JOIN text_attribute ta on a.id = ta.parent
                LEFT JOIN file_attribute fa on a.id = fa.parent";

        if($params != null) {
            $sql .= " WHERE ";
            $first = true;
            foreach ($params as $key => $value){
                $sql .= (!$first ? " AND " : "")."`".$key."` = :".$key;
                $first = false;
            }

            $result = DB::get()->run($sql, $params)->fetchAll();
        } else {
            $result = DB::get()->run($sql)->fetchAll();
        }

        $instances = array();
        foreach ($result as $entry) {
            if(isset($entry["text"])){
                $attribute = new TextAttribute($entry["id"]);
                $attribute->forceBlockID($entry["block"]);
                $attribute->name = $entry["name"];
                $attribute->text = $entry["text"];
                array_push($instances, $attribute);
            } elseif (isset($entry["file"])) {
                $attribute = new FileAttribute($entry["id"]);
                $attribute->forceBlockID($entry["block"]);
                $attribute->name = $entry["name"];
                $attribute->forceFileID($entry["file"]);
                array_push($instances, $attribute);
            }
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?BlockAttribute
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
    }

    public static function create(object $object): int
    {
        /** @var BlockAttribute $attribute */
        $attribute = $object;
        var_dump($attribute->getBlock());

        DB::get()->run("INSERT INTO `attribute` (`block`, `name`)
                            VALUES (:block, :name)",
            [
                "block" => $attribute->getBlock()->getID(),
                "name" => $attribute->name
            ]);

        $newID = DB::get()->pdo()->lastInsertId();

        if($attribute instanceof TextAttribute) {
            DB::get()->run("INSERT INTO `text_attribute` (`id`, `text`)
                            VALUES (:id, :text)",
                [
                    "id" => $newID,
                    "text" => $attribute->text
                ]);
        } elseif($attribute instanceof FileAttribute) {
            DB::get()->run("INSERT INTO `file_attribute` (`id`, `file`)
                            VALUES (:id, :file)",
                [
                    "id" => $newID,
                    "file" => $attribute->getFile()->getID()
                ]);
        }

        return $newID;
    }

    public static function update(object $object): void
    {
        /** @var BlockAttribute $attribute */
        $attribute = $object;

        DB::get()->run("UPDATE `attribute`
                            SET block = :block, name = :name
                            WHERE id = :id",
            [
                "block" => $attribute->getBlock()->getID(),
                "name" => $attribute->name,
                "id" => $attribute->getID()
            ]);

        if($attribute instanceof TextAttribute) {
            DB::get()->run("UPDATE `text_attribute`
                            SET `text` = :text
                            WHERE parent = :id",
                [
                    "id" => $attribute->getID(),
                    "text" => $attribute->text
                ]);
        } elseif($attribute instanceof FileAttribute) {
            DB::get()->run("UPDATE `file_attribute`
                            SET `file` = :file
                            WHERE parent = :id",
                [
                    "id" => $attribute->getID(),
                    "file" => $attribute->getFile()->getID()
                ]);
        }
    }

    public static function delete(object $object): void
    {
        /** @var BlockAttribute $attribute */
        $attribute = $object;

        DB::get()->run("DELETE FROM `attribute` WHERE `id` = :id",
            ["id" => $attribute->getID()]);
    }
}