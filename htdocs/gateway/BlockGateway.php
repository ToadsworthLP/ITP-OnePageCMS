<?php
include_once "../gateway/DatabaseGateway.php";
include_once "../utility/DB.php";
include_once "../model/Block.php";
include_once "../gateway/BlockTypeGateway.php";
include_once "../gateway/SiteGateway.php";

class BlockGateway extends DatabaseGateway
{
    public static function fetch(int $id): Block
    {
        $result = DB::get()->run("SELECT * FROM `block` WHERE id = :id", ["id" => $id])->fetch();

        if ($result === false) throw new InvalidArgumentException("No database entry exists for ID " . $id);

        $block = new Block($id);
        $block->setType(BlockTypeGateway::fetch($result["type"]));
        $block->setSite(SiteGateway::fetch($result["site"]));
        $block->block_order = $result["block_order"];

        return $block;
    }

    public static function create(object $object): int
    {
        /** @var Block $block */
        $block = $object;

        DB::get()->run("INSERT INTO `block` (`type`, `site`, `block_order`)
                            VALUES (:type, :site, :block_order)",
            [
                "type" => $block->getType()->getID(),
                "site" => $block->getSite()->getID(),
                "block_order" => $block->block_order
            ]);

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var Block $block */
        $block = $object;

        DB::get()->run("UPDATE `block`
                            SET type = :type, site = :site, block_order = :block_order
                            WHERE id = :id",
            [
                "type" => $block->getType()->getID(),
                "site" => $block->getSite()->getID(),
                "block_order" => $block->block_order,
                "id" => $block->getID()
            ]);
    }

    public static function delete(object $object): void
    {
        /** @var Block $block */
        $block = $object;

        DB::get()->run("DELETE FROM `block` WHERE `id` = :id",
            ["id" => $block->getID()]);
    }
}