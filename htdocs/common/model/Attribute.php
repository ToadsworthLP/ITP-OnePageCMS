<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/AttributeGateway.php";

/**
 * Representation of a attribute
 */
class Attribute extends DatabaseObject
{
    public string $name;

    private int $blockID;

    public function getBlock(): Block
    {
        return BlockGateway::fetch($this->blockID);
    }

    public function setBlock(Block $block): void
    {
        $this->blockID = $block->getID();
    }

    protected function getGatewayClass(): string
    {
        return AttributeGateway::class;
    }
}