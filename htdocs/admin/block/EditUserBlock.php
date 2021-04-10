<?php

function EditUserBlock(User $user) {
    $id = $user->getID();
    $username = $user->username;
    $email = $user->email;
    $currRole = $user->getRole()->getID();

    $roles = RoleGateway::fetchAll();
    $roleOptions = "";

    foreach ($roles as $role){
        $roleOptions .= "<option " . ($role->getID() === $currRole ? "selected" : "") . " value=" . $role->getID() .">".$role->name."</option>";
    }

    include "admin/template/EditUserTemplate.php";
}