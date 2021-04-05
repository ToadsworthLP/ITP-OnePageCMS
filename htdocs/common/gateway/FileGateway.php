<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/model/File.php";
include_once "common/utility/DB.php";

class FileGateway extends DatabaseGateway
{
    public static function fetchAll(?array $params = null): array
    {
        $result = self::fetchFromTable("file", $params);

        $instances = array();
        foreach ($result as $entry) {
            $file = new File($entry["id"]);
            $file->filename = $entry["filename"];

            array_push($instances, $file);
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?File
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
    }

    public static function create(object $object): int
    {
        /** @var File $file */
        $file = $object;

        DB::get()->run("INSERT INTO `file` (`filename`) VALUES (:filename)",
            ["filename" => $file->filename]);

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var File $file */
        $file = $object;

        DB::get()->run("UPDATE `file` SET filename = :filename WHERE id = :id",
            ["filename" => $file->filename, "id" => $file->getID()]);
    }

    public static function delete(object $object): void
    {
        /** @var File $file */
        $file = $object;

        DB::get()->run("DELETE FROM `file` WHERE `id` = :id",
            ["id" => $file->getID()]);
    }
}