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
            $file->size = $entry["size"];
            $file->timestamp = new DateTime($entry["timestamp"]);

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
        $ts = new DateTime("now");

        DB::get()->run("INSERT INTO `file` (`filename`, `size`, `timestamp`) VALUES (:filename, :size, FROM_UNIXTIME(:timestamp) )",
            ["filename" => $file->filename, "size" => $file->size, "timestamp" => $ts->getTimestamp()]);

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var File $file */
        $file = $object;

        DB::get()->run("UPDATE `file` SET filename = :filename, size = :size, timestamp = FROM_UNIXTIME(:timestamp) WHERE id = :id",
            ["filename" => $file->filename, "size" => $file->size, "timestamp" => $file->timestamp->getTimestamp(), "id" => $file->getID()]);
    }

    public static function delete(object $object): void
    {
        /** @var File $file */
        $file = $object;

        DB::get()->run("DELETE FROM `file` WHERE `id` = :id",
            ["id" => $file->getID()]);
    }
}