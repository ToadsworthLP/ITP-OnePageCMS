<?php
include_once "common/gateway/BlockGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";

RequirePermissions(PermissionConfig::STAFF);

if(isset($_POST["targetBlock"])) {
    $block = BlockGateway::fetch(["id" => $_POST["targetBlock"]]);
    $block->delete();
}

header("Location: ".ReturnUtility::getLink());
