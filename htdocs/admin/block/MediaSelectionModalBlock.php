<?php
include_once "admin/block/MediaSelectionEntryBlock.php";
include_once "common/model/File.php";
include_once "common/gateway/FileGateway.php";

function MediaSelectionModalBlock() : array {
    $files = FileGateway::fetchAll(["_ORDER_DESC" => "timestamp"]);
    include_once "admin/template/MediaSelectionModalTemplate.php";
    return $files;
}
