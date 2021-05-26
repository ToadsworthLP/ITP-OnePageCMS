<?php
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";
include_once "common/model/User.php";
include_once "common/gateway/UserGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";
include_once "admin/utility/AccountUtility.php";

if(isset($_POST["targetUser"]) && isset($_POST["username"]) && isset($_POST["email"]) &&
    $_POST["username"] != "" && $_POST["email"] != "") {

    $targetUser = UserGateway::fetch(["id" => $_POST["targetUser"]]);

    $isCurrentAdmin = AccountUtility::getCurrentUser()->getRole()->permissions >= PermissionConfig::ADMIN;
    $editingSelf = AccountUtility::getCurrentUser()->getID() == $_POST["targetUser"];

    if($isCurrentAdmin || $editingSelf) {
        $targetUser->username = $_POST["username"];
        $targetUser->email = $_POST["email"];

        if(isset($_POST["role"]) && $isCurrentAdmin) {
            if($targetUser->getID() != PermissionConfig::ROOT_USER_ID) { // Don't allow the root account to change its role
                $targetUser->setRole(RoleGateway::fetch(["id" => $_POST["role"]]));
            } else if($_POST["role"] != PermissionConfig::ROOT_ROLE_ID) {
                $error = new Alert(AlertType::WARNING, "The root account's role cannot be changed.", true);
                $error->post();
            }
        } else {
            $error = new Alert(AlertType::WARNING, "Only administrators can assign user roles.", true);
            $error->post();
        }

        if(isset($_POST["password"]) && isset($_POST["confirmPassword"]) && $editingSelf) {
            if($_POST["password"] == $_POST["confirmPassword"]) {
                $newPassword = AccountUtility::hash($_POST["password"]);
                $targetUser->password = $newPassword;
            } else {
                $error = new Alert(AlertType::WARNING, "The entered passwords do not match.", true);
                $error->post();
            }
        }

        try {
            $targetUser->update();
            $success = new Alert(AlertType::SUCCESS, "The user was updated successfully!", true);
            $success->post();
        } catch (PDOException $e) {
            $error = new Alert(AlertType::WARNING, "The entered username is not unique. Please choose a different one.", true);
            $error->post();
        }
    } else {
        $error = new Alert(AlertType::WARNING, "You do not have the required permissions.", true);
        $error->post();
    }
} else {
    $error = new Alert(AlertType::WARNING, "The entered user information is incomplete. Please try again.", true);
    $error->post();
}

header("Location: ".ReturnUtility::getLink());
