<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/utility/DB.php";
include_once "common/model/Block.php";
include_once "common/gateway/BlockTypeGateway.php";
include_once "common/gateway/SiteGateway.php";

class BlockGateway extends DatabaseGateway
{
    public static function fetchAll(?array $params = null): array
    {
        $result = self::fetchFromTable("block", $params);

        $instances = array();
        foreach ($result as $entry) {
            $block = new Block($entry["type"]);
            $block->forceTypeID($entry["type"]);
            $block->forceSiteID($entry["site"]);
            $block->block_order = $entry["block_order"];

            array_push($instances, $block);
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?Block
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
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