<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/AttributeGateway.php";

/**
 * Representation of a attribute
 */
class BlockAttribute extends DatabaseObject
{
    public string $name;

    public int $blockID;

    public function getBlock(): Block
    {
        return BlockGateway::fetch(["id" => $this->blockID]);
    }

    public function setBlock(Block $block): void
    {
        $this->blockID = $block->getID();
    }

    /**
     * Sets the block ID of this attribute with force.
     * Do not use this unless you know what you are doing.
     * No validation checks are done when this is used, so be careful.
     * @param int $id The ID of the block to assign
     */
    public function forceBlockID(int $id): void
    {
        $this->blockID = $id;
    }

    protected function getGatewayClass(): string
    {
        return AttributeGateway::class;
    }
}