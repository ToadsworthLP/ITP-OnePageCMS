<?php
include_once "common/model/Block.php";

function SiteEditorItemBlock(Block $block) {
    $i = $block->getID();
    $id = $block->getID();

    include "admin/template/SiteEditorItemTemplate.php";
}