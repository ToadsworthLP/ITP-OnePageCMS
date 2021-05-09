<?php
include_once "common/model/Block.php";
include_once "admin/utility/AttributeSet.php";

function SiteEditorItemBlock(Block $block) {
    $i = $block->getID(); // TODO remove this, some code still depends on it

    $id = $block->getID();
    $type = $block->getType()->getID();
    $attributes = new AttributeSet($block);

    $attrArray = $attributes->getRawArray();
    $images = array();
    foreach ($attrArray as $key => $val) { // Fetch all image file entries so we can display their filenames on the buttons
        $isImage = $val instanceof FileAttribute;
        if($isImage) {
            $images[$key] = FileGateway::fetch(["id" => $attributes->get($key)]);
        }
    }

    include "admin/template/SiteEditorItemTemplate.php";
}
