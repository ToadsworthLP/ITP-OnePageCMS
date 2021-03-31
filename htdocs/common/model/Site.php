<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/SiteGateway.php";

/**
 * Representation of a site
 */
class Site extends DatabaseObject
{
    public string $name;
    public int $required_permissions;
    public int $published;
    public int $menu_option;

    protected function getGatewayClass(): string
    {
        return SiteGateway::class;
    }
}