<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/model/BlockType.php";
include_once "common/utility/DB.php";

class BlockTypeGateway extends DatabaseGateway
{
    public static function fetchAll(?array $params = null): array
    {
        $result = self::fetchFromTable("blocktype", $params);

        $instances = array();
        foreach ($result as $entry) {
            $blocktype = new BlockType($entry["id"]);
            $blocktype->filename = $entry["filename"];

            array_push($instances, $blocktype);
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?BlockType
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
    }

    public static function create(object $object): int
    {
        /** @var BlockType $blocktype */
        $blocktype = $object;

        DB::get()->run("INSERT INTO `blocktype` (`filename`) VALUES (:filename)",
            ["filename" => $blocktype->filename]);

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var BlockType $blocktype */
        $blocktype = $object;

        DB::get()->run("UPDATE `blocktype` SET filename = :filename WHERE id = :id",
            ["filename" => $blocktype->filename, "id" => $blocktype->getID()]);
    }

    public static function delete(object $object): void
    {
        /** @var BlockType $blocktype */
        $blocktype = $object;

        DB::get()->run("DELETE FROM `blocktype` WHERE `id` = :id",
            ["id" => $blocktype->getID()]);
    }
}