<?php
include_once "common/model/File.php";
include_once "common/config/PathConfig.php";

function MediaListEntryBlock(File $file) {
    $path = PathConfig::IMAGE_PATH_THUMBNAIL.$file->getID();
    $id = $file->getID();
    $filename = $file->filename;
    $size = $file->size;
    $timestamp = $file->timestamp->getTimestamp();

    include "admin/template/MediaListEntryTemplate.php";
}