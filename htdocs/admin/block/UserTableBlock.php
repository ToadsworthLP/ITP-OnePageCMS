<?php
include_once "common/gateway/UserGateway.php";
include_once "admin/block/UserTableRowBlock.php";

function UserTable(bool $mobile = false) {
    $users = UserGateway::fetchAll();

    if($mobile) {
        include "admin/template/UserTableMobileTemplate.php";
    } else {
        include "admin/template/UserTableDesktopTemplate.php";
    }
}