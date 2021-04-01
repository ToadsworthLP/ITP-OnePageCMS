<?php
include_once "admin/utility/AccountUtility.php";
include_once "admin/config/AdminPages.php";

/*
 * Redirect back to the login page if the user is not logged in
 * */
if(!AccountUtility::isLoggedIn()) {
    header("Location: admin.php?page=".AdminPages::LOGIN);
}