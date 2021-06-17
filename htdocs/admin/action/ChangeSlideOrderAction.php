<?php
include_once "common/gateway/SlideGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";

RequirePermissions(PermissionConfig::STAFF);

$list = isset($_POST["list"]) ? $_POST["list"] : null;

if ($list != null) {
    $output = [];
    parse_str($list, $output);

    foreach ($output["slide"] as $pos => $id) {
        $slide = SlideGateway::fetch(["id" => $id]);
        $slide->slideOrder = $pos;
        $slide->update();
    }

    http_response_code(200);
    die();
} else {
    http_response_code(400);
    die();
}
