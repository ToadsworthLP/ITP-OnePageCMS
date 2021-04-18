<?php
include_once "common/gateway/BlockGateway.php";
include_once "admin/utility/RequirePermissions.php";

if(isset($_POST["targetBlock"])) {
    $block = BlockGateway::fetch(["id" => $_POST["targetBlock"]]);
    RequirePermissions($block->getSite()->requiredPermissions);

    $block->delete();
}

header("Location: ".ReturnUtility::getLink());
