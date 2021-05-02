<?php
include_once "common/model/File.php";
include_once "common/config/PathConfig.php";

function MediaSelectionEntryBlock(File $file) {
    $path = PathConfig::IMAGE_PATH_THUMBNAIL.$file->getID();
    $id = $file->getID();
    $filename = $file->filename;

    include "admin/template/MediaSelectionEntryTemplate.php";
}