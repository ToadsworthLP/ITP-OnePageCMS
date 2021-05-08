<?php
include_once "common/gateway/SlideGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";

RequirePermissions(PermissionConfig::STAFF);

if(isset($_POST["id"])) {
    $slide = SlideGateway::fetch(["id" => $_POST["id"]]);

    $slide->delete();
}

header("Location: ".ReturnUtility::getLink());
