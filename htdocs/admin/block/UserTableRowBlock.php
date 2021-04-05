<?php
include_once "common/model/User.php";

function UserTableRow(User $user) {
    $id = $user->getID();
    $username = $user->username;
    $email = $user->email;
    $rolename = $user->getRole()->name;

    include "admin/template/UserTableRowDesktopTemplate.php";
}