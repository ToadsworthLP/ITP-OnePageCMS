<?php
include_once "common/model/User.php";

function UserTableRow(User $user, bool $mobile = false, bool $even = true) {
    $id = $user->getID();
    $username = $user->username;
    $email = $user->email;
    $rolename = $user->getRole()->name;

    if($mobile){
        include "admin/template/UserTableRowMobileTemplate.php";
    } else {
        include "admin/template/UserTableRowDesktopTemplate.php";
    }
}