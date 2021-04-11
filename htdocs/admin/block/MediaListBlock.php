<?php
include_once "admin/block/MediaListEntryBlock.php";

function MediaListBlock() {
    for($i = 0; $i < 30; $i++){
        MediaListEntryBlock();
    }
}