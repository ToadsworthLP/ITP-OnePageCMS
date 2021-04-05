<?php
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";
include_once "admin/utility/AccountUtility.php";
include_once "common/model/User.php";

if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["role"]) &&
         $_POST["username"] != "" && $_POST["email"] != "" && $_POST["password"] != "" && $_POST["role"] != "") {

    $newUser = new User();
    $newUser->username = $_POST["username"];
    $newUser->email = $_POST["email"];
    $newUser->password = $_POST["password"];
    $newUser->setRole(RoleGateway::fetch(["id" => $_POST["role"]]));

    if(AccountUtility::register($newUser)) {
        $success = new Alert(AlertType::SUCCESS, "The new user was created successfully!", true);
        $success->post();
    } else {
        $error = new Alert(AlertType::WARNING, "The entered username is not unique. Please choose a different one.", true);
        $error->post();
    }
} else {
    $error = new Alert(AlertType::WARNING, "The entered user information is incomplete. Please try again.", true);
    $error->post();
}

header("Location: ".ReturnUtility::getLink());