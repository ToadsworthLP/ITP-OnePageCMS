<?php
include_once "admin/block/MediaListEntryBlock.php";
include_once "common/model/File.php";
include_once "common/gateway/FileGateway.php";

function MediaListBlock() {
    $files = FileGateway::fetchAll(["_ORDER_DESC" => "timestamp"]);

    foreach ($files as $file) {
        MediaListEntryBlock($file);
    }
}