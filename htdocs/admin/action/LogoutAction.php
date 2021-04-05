<?php
include_once "admin/utility/AccountUtility.php";
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";

AccountUtility::logout();

$success = new Alert(AlertType::SUCCESS, "Logout successful.", true);
$success->post();

header("Location: admin.php?page=".AdminPages::LOGIN);