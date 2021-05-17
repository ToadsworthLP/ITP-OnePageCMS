<?php
include_once "admin/utility/AccountUtility.php";
include_once "admin/utility/ReturnUtility.php";
include_once "admin/config/AdminPages.php";
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";

if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($_POST["rememberUser"]) {
        setcookie("rememberUser", true, time()+60*60*24*7);
        setcookie("username", $username, time()+60*60*24*7); // Expires after 7 days
    } else {
        setcookie("rememberUser", false, time()+60*60*24*7);
    }

    $user = AccountUtility::login($username, $password);
    if(!$user){
        $error = new Alert(AlertType::WARNING, "The entered login credentials are incorrect.", true);
        $error->post();
        header("Location: admin.php?page=".AdminPages::LOGIN);
    } else {
        header("Location: admin.php?page=".AdminPages::DASHBOARD);
    }
}

