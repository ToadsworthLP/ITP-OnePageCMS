<?php
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";
include_once "common/gateway/FileGateway.php";
include_once "common/config/PathConfig.php";

RequirePermissions(PermissionConfig::STAFF);

if(isset($_POST["target"])) {
    $file = FileGateway::fetch(["id" => $_POST["target"]]);
    $fullPath = PathConfig::IMAGE_PATH_FULL.$file->getID();
    $thumbPath = PathConfig::IMAGE_PATH_THUMBNAIL.$file->getID();

    $success = true;
    $success &= unlink($fullPath);
    if($success) unlink($thumbPath); // There might not be a thumbnail for the image, so ignore error if none is found

    if($success) {
        $file->delete();
        $success = new Alert(AlertType::SUCCESS, "Das Bild wurde erfolgreich gelöscht.", true);
        $success->post();
    } else {
        $error = new Alert(AlertType::WARNING, "Das Bild konnte nicht gelöscht werden.", true);
        $error->post();
    }
}

header("Location: ".ReturnUtility::getLink());