<?php
include_once "../utility/constants.php";
include_once "../model/IDatabaseObject.php";
include_once "../gateway/UserGateway.php";

/**
 * Representation of a registered user
 */
class User implements IDatabaseObject
{
    public string $username;
    public string $password;
    public string $email;

    private int $id;
    private int $roleId;

    /**
     * User constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Gets the role assigned to this user.
     * @return Role The role of the user
     */
    public function getRole() : Role {
        return RoleGateway::getRole($this->roleId);
    }

    /**
     * Sets the role assigned to this user.
     * @param Role $role The role to assign
     */
    public function setRole(Role $role) {
        $this->roleId = $role->getId();
    }

    public function commit()
    {
        if($this->id == ID_CREATE_NEW){
            UserGateway::createUser($this);
        } else {
            UserGateway::updateUser($this);
        }
    }
}