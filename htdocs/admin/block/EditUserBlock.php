<?php
include_once "admin/utility/AccountUtility.php";

function EditUserBlock(User $user) {
    $id = $user->getID();
    $username = $user->username;
    $email = $user->email;
    $password = $user->password;
    $currRole = $user->getRole()->getID();

    $editingSelf = AccountUtility::getCurrentUser()->getID() == $id;

    $roles = RoleGateway::fetchAll();
    $roleOptions = "";

    foreach ($roles as $role){
        $roleOptions .= "<option " . ($role->getID() === $currRole ? "selected" : "") . " value=" . $role->getID() .">".$role->name."</option>";
    }

    include "admin/template/EditUserTemplate.php";
}
