<?php
include_once "../gateway/DatabaseGateway.php";
include_once "../model/BlockType.php";
include_once "../utility/DB.php";

class BlockTypeGateway extends DatabaseGateway
{
    public static function fetch(int $id): BlockType
    {
        $result = DB::get()->run("SELECT * FROM `blocktype` WHERE id = :id", ["id" => $id])->fetch();

        if ($result === false) throw new InvalidArgumentException("No database entry exists for ID " . $id);

        $blocktype = new BlockType($id);
        $blocktype->filename = $result["filename"];

        return $blocktype;
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