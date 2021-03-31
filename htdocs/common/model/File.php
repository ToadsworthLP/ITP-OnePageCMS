<?php
include_once "../model/DatabaseObject.php";
include_once "../gateway/FileGateway.php";

/**
 * Representation of a file
 */
class File extends DatabaseObject
{

    public string $filename;

    protected function getGatewayClass(): string
    {
        return FileGateway::class;
    }
}