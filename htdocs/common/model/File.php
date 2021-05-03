<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/FileGateway.php";

/**
 * Representation of a file
 */
class File extends DatabaseObject
{
    public string $filename;
    public int $size;
    public DateTime $timestamp;

    protected function getGatewayClass(): string
    {
        return FileGateway::class;
    }
}