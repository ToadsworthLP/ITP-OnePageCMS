<?php
include_once "../utility/constants.php";
include_once "../model/DatabaseObject.php";
include_once "../gateway/UserGateway.php";

/**
 * Representation of a registered user
 */
class User extends DatabaseObject
{
    public string $username;
    public string $password;
    public string $email;

    private int $roleId;

    /**
     * Gets the role assigned to this user.
     * @return Role The role of the user
     */
    public function getRole(): Role
    {
        return RoleGateway::fetch($this->roleId);
    }

    /**
     * Sets the role assigned to this user.
     * @param Role $role The role to assign
     */
    public function setRole(Role $role): void
    {
        $this->roleId = $role->getId();
    }

    protected function getGatewayClass(): string
    {
        return UserGateway::class;
    }
}