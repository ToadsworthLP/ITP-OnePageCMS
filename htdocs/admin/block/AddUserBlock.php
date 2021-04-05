<?php
include_once "common/Gateway/RoleGateway.php";

function AddUserBlock() {
    $roles = RoleGateway::fetchAll();
    $roleOptions = "";

    foreach ($roles as $role){
        $roleOptions .= "<option value=" . $role->getID() .">".$role->name."</option>";
    }

    include "admin/template/AddUserTemplate.php";
}