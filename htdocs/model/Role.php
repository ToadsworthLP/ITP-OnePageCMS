<?php
include_once "../model/DatabaseObject.php";
include_once "../gateway/RoleGateway.php";

/**
 * Representation of a user role
 */
class Role extends DatabaseObject
{
    public string $name;
    public int $permissions;

    protected function getGatewayClass(): string
    {
        return RoleGateway::class;
    }
}