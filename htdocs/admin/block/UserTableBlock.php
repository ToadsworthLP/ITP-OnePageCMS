<?php
include_once "common/gateway/UserGateway.php";
include_once "admin/block/UserTableRowBlock.php";

function UserTable() {
    $users = UserGateway::fetchAll();

    include "admin/template/UserTableDesktopTemplate.php";
}