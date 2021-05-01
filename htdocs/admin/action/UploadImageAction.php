<?php
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";
include_once "admin/utility/ImageUploadUtility.php";
include_once "common/model/File.php";
include_once "common/gateway/FileGateway.php";
include_once "lib/phpThumb/phpthumb.class.php";

RequirePermissions(PermissionConfig::STAFF);

if(isset($_FILES["upload"]) && $_FILES["upload"]["error"] === UPLOAD_ERR_OK) {
    $file = new File();
    $file->filename = $_FILES["upload"]["name"];
    $file->size = $_FILES["upload"]["size"];
    $file->create();

    $imgUtil = new ImageUploadUtility($_FILES["upload"]["tmp_name"], $file->getID());

    if($imgUtil->isValidImage()) {
        if($imgUtil->upload(true, 256, 256) === false) {
            $file->delete(); // Delete file entry if the upload failed
            $error = new Alert(AlertType::WARNING, "Das Bild konnte nicht hochgeladen werden.", true);
            $error->post();
        } else {
            $success = new Alert(AlertType::SUCCESS, "Das Bild wurde erfolgreich hochgeladen.", true);
            $success->post();
        }
    } else {
        $error = new Alert(AlertType::WARNING, "Die hochgeladene Datei ist kein Bild im JPEG, PNG oder GIF-Format.", true);
        $error->post();
        $file->delete(); // Delete file entry if the upload failed
    }
} else {
    $error = new Alert(AlertType::WARNING, "Das Bild konnte nicht hochgeladen werden.", true);
    $error->post();
}

header("Location: ".ReturnUtility::getLink());