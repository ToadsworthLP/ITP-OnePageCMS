<?php
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";
include_once "common/model/User.php";
include_once "common/gateway/UserGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";

RequirePermissions(PermissionConfig::ADMIN);

if(isset($_POST["targetUser"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["role"]) &&
    $_POST["username"] != "" && $_POST["email"] != "" && $_POST["role"] != "") {

    $targetUser = UserGateway::fetch(["id" => $_POST["targetUser"]]);
    $targetUser->username = $_POST["username"];
    $targetUser->email = $_POST["email"];
    $targetUser->setRole(RoleGateway::fetch(["id" => $_POST["role"]]));

    try {
        $targetUser->update();
        $success = new Alert(AlertType::SUCCESS, "The user was updated successfully!", true);
        $success->post();
    } catch (PDOException $e) {
        $error = new Alert(AlertType::WARNING, "The entered username is not unique. Please choose a different one.", true);
        $error->post();
    }
} else {
    $error = new Alert(AlertType::WARNING, "The entered user information is incomplete. Please try again.", true);
    $error->post();
}

header("Location: ".ReturnUtility::getLink());