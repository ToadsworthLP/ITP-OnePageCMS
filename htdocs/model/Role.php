<?php
include_once "../gateway/RoleGateway.php";

/**
 * Representation of a user role
 */
class Role implements IDatabaseObject
{
    public string $name;
    public int $permissions;

    private int $id;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Role constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function commit()
    {
        if($this->id == ID_CREATE_NEW){
            RoleGateway::createRole($this);
        } else {
            RoleGateway::updateRole($this);
        }
    }
}