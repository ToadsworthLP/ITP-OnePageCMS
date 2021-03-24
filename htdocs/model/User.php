<?php


/**
 * Representation of a registered user
 */
class User
{
    public int $id;
    public string $username;
    public string $email;

    private int $roleId;

    /**
     * Gets the role assigned to this user.
     * @return Role The role of the user
     */
    public function getRole() : Role {
        // TODO fetch the role object that corresponds to the roleId in this object from the database
        return new Role();
    }

    /**
     * Sets the role assigned to this user.
     * @param Role $role The role to assign
     */
    public function setRole(Role $role) {
        $this->roleId = $role->id;
    }
}