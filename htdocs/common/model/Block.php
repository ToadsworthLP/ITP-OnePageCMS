<?php
include_once "../model/DatabaseObject.php";
include_once "../gateway/BlockGateway.php";

/**
 * Representation of a block
 */
class Block extends DatabaseObject
{
    public int $block_order;

    private int $typeID;
    private int $siteID;

    public function getType(): BlockType
    {
        return BlockTypeGateway::fetch($this->typeID);
    }

    public function setType(BlockType $type): void
    {
        $this->typeID = $type->getID();
    }

    public function getSite(): Site
    {
        return SiteGateway::fetch($this->siteID);
    }

    public function setSite(Site $site): void
    {
        $this->siteID = $site->getID();
    }

    protected function getGatewayClass(): string
    {
        return BlockGateway::class;
    }
}