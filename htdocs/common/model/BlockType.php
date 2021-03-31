<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/BlockTypeGateway.php";

/**
 * Representation of a block type
 */
class BlockType extends DatabaseObject
{
    public string $filename;

    protected function getGatewayClass(): string
    {
        return BlockTypeGateway::class;
    }
}