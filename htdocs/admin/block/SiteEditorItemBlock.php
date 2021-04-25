<?php
include_once "common/model/Block.php";
include_once "admin/utility/AttributeSet.php";

function SiteEditorItemBlock(Block $block) {
    $i = $block->getID(); // TODO remove this, some code still depends on it

    $id = $block->getID();
    $type = $block->getType()->getID();
    $attributes = new AttributeSet($block);

    include "admin/template/SiteEditorItemTemplate.php";
}