<?php
include_once "../gateway/DatabaseGateway.php";
include_once "../model/File.php";
include_once "../utility/DB.php";

class FileGateway extends DatabaseGateway
{
    public static function fetch(int $id): File
    {
        $result = DB::get()->run("SELECT * FROM `file` WHERE id = :id", ["id" => $id])->fetch();

        if ($result === false) throw new InvalidArgumentException("No database entry exists for ID " . $id);

        $file = new File($id);
        $file->filename = $result["filename"];

        return $file;
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