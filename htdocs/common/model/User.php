<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/UserGateway.php";

/**
 * Representation of a registered user
 */
class User extends DatabaseObject
{
    public string $username;
    public string $password;
    public string $email;

    private int $roleID;

    /**
     * Gets the role assigned to this user.
     * @return Role The role of the user
     */
    public function getRole(): Role
    {
        return RoleGateway::fetch(["id" => $this->roleID]);
    }

    /**
     * Sets the role assigned to this user.
     * @param Role $role The role to assign
     */
    public function setRole(Role $role): void
    {
        $this->roleID = $role->getId();
    }

    /**
     * Sets the role ID of this user with force.
     * Do not use this unless you know what you are doing.
     * No validation checks are done when this is used, so be careful.
     * @param int $id The ID of the role to assign
     */
    public function forceRoleID(int $id): void
    {
        $this->roleID = $id;
    }

    protected function getGatewayClass(): string
    {
        return UserGateway::class;
    }
}