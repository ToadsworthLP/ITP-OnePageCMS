<?php
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";
include_once "common/gateway/FileGateway.php";
include_once "common/config/PathConfig.php";

RequirePermissions(PermissionConfig::STAFF);

if(isset($_POST["target"]) && isset($_POST["filename"])) {
    if($_POST["filename"] !== "") {
        $file = FileGateway::fetch(["id" => $_POST["target"]]);
        $file->filename = $_POST["filename"];
        $file->update();

        $success = new Alert(AlertType::SUCCESS, "Das Bild wurde erfolgreich umbenannt.", true);
        $success->post();
    } else {
        $error = new Alert(AlertType::WARNING, "Der Name der Datei darf nicht leer sein.", true);
        $error->post();
    }
}

header("Location: ".ReturnUtility::getLink());