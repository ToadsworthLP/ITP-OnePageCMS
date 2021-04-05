<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/SiteGateway.php";

/**
 * Representation of a site
 */
class Site extends DatabaseObject
{
    public string $name;
    public int $requiredPermissions;
    public bool $published;
    public bool $menuOption;

    protected function getGatewayClass(): string
    {
        return SiteGateway::class;
    }
}