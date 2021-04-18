<?php
include_once "common/gateway/SiteGateway.php";
include_once "common/gateway/BlockGateway.php";
include_once "admin/utility/RequirePermissions.php";

if(isset($_POST["targetSite"])) {
    $site = SiteGateway::fetch(["id" => $_POST["targetSite"]]);
    RequirePermissions($site->requiredPermissions);

    $block = BlockGateway::fetch(["site" => $site->getID(), "_ORDER_ASC" => "block_order"]); // Find the lowest block order
    $minOrder = $block->block_order;

    var_dump($block);

    $newBlock = new Block();
    $newBlock->setSite($site);
    $newBlock->forceTypeID(1); // TODO put the default value somewhere easier to find if we ever need to change this
    $newBlock->block_order = $minOrder - 1;
    $newBlock->create();
}

header("Location: ".ReturnUtility::getLink());
