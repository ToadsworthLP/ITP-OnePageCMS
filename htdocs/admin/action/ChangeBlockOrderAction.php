<?php
include_once "common/gateway/BlockGateway.php";
include_once "admin/utility/RequirePermissions.php";

$list = isset($_POST['list']) ? $_POST['list'] : null;

if ($list != null) {
    $output = "";
    parse_str($list, $output);

    $verified = false;
    foreach ($output["item"] as $pos => $id) {
        $block = BlockGateway::fetch(["id" => $id]);

        if(!$verified) {
            RequirePermissions($block->getSite()->requiredPermissions);
        }

        $block->block_order = $pos;
        $block->update();
    }
}