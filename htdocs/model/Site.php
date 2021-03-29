<?php
include_once "../model/DatabaseObject.php";
include_once "../gateway/SiteGateway.php";

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