<?php
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";
include_once "common/model/User.php";
include_once "common/gateway/UserGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";

RequirePermissions(PermissionConfig::ADMIN);

if(isset($_POST["targetUser"])) {
    if($_POST["targetUser"] == PermissionConfig::ROOT_USER_ID) {
        $error = new Alert(AlertType::WARNING, "The root user cannot be deleted.", true);
        $error->post();
    } else {
        $targetUser = UserGateway::fetch(["id" => $_POST["targetUser"]]);

        try {
            $targetUser->delete();
            $success = new Alert(AlertType::SUCCESS, "The user was deleted successfully!", true);
            $success->post();
        } catch (PDOException $e) {
            $error = new Alert(AlertType::WARNING, "An error occured when deleting the user ".$targetUser->username.".", true);
            $error->post();
        }
    }
} else {
    $error = new Alert(AlertType::WARNING, "No target user was specified for deletion.", true);
    $error->post();
}

header("Location: ".ReturnUtility::getLink());
