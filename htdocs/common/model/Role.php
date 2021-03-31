<?php
include_once "../model/DatabaseObject.php";
include_once "../gateway/RoleGateway.php";

/**
 * Representation of a user role
 */
class Role extends DatabaseObject
{
    const DEFAULT_ROLE = 0; // The default fallback role if a user's actual role has been deleted

    public string $name;
    public int $permissions;

    protected function getGatewayClass(): string
    {
        return RoleGateway::class;
    }
}