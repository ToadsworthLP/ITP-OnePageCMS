<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/BlockGateway.php";

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
        return BlockTypeGateway::fetch(["id" => $this->typeID]);
    }

    public function setType(BlockType $type): void
    {
        $this->typeID = $type->getID();
    }

    /**
     * Sets the type ID of this block with force.
     * Do not use this unless you know what you are doing.
     * No validation checks are done when this is used, so be careful.
     * @param int $id The ID of the type to assign
     */
    public function forceTypeID(int $id): void
    {
        $this->typeID = $id;
    }

    public function getSite(): Site
    {
        return SiteGateway::fetch(["id" => $this->siteID]);
    }

    public function setSite(Site $site): void
    {
        $this->siteID = $site->getID();
    }

    /**
     * Sets the site ID of this block with force.
     * Do not use this unless you know what you are doing.
     * No validation checks are done when this is used, so be careful.
     * @param int $id The ID of the site to assign
     */
    public function forceSiteID(int $id): void
    {
        $this->siteID = $id;
    }

    protected function getGatewayClass(): string
    {
        return BlockGateway::class;
    }
}