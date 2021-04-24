<?php
include_once "common/gateway/BlockGateway.php";
include_once "admin/utility/RequirePermissions.php";

$list = isset($_POST['list']) ? $_POST['list'] : null;

if ($list != null) {
    $output = "";
    parse_str($list, $output);

    $permsCheck = true;
    $verified = false;

    foreach ($output["item"] as $pos => $id) {
        $block = BlockGateway::fetch(["id" => $id]);

        if($permsCheck) { // Only check once instead of once for each block
            $verified = checkPermissions($block->getSite()->requiredPermissions);
            $permsCheck = false;
        }

        if($verified) {
            $block->block_order = $pos;
            $block->update();
        }
    }

    if($verified) { // Report proper HTTP status
        http_response_code(200);
        die();
    } else {
        http_response_code(403);
        die();
    }
} else {
    http_response_code(400);
    die();
}