<?php
include_once "common/gateway/BlockGateway.php";
include_once "admin/block/SiteEditorItemBlock.php";

function SiteEditorBlock() {
    $site = 1;
    $blocks = BlockGateway::fetchAll(["site" => $site, "_ORDER_ASC" => "block_order"]);

    foreach ($blocks as $block) {
        SiteEditorItemBlock($block);
    }
}