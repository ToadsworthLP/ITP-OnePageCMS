<?php
include_once "common/gateway/SlideGateway.php";
include_once "admin/block/SlideEditorItemBlock.php";

function SlideEditorBlock() {
    $site = 1;
    $slides = SlideGateway::fetchAll(["_ORDER_ASC" => "slide_order"]);

    foreach ($slides as $slide) {
        SlideEditorItemBlock($slide);
    }
}
