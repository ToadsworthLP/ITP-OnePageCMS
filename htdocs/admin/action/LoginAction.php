<?php
include_once "admin/utility/AccountUtility.php";
include_once "admin/utility/ReturnUtility.php";
include_once "admin/config/AdminPages.php";

if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = AccountUtility::login($username, $password);
    if($user){
        // TODO implement success notification
    } else {
        // TODO implement failure notification
    }
}

header("Location: admin.php?page=".AdminPages::DASHBOARD);