<?php
include_once "admin/utility/AccountUtility.php";
include_once "admin/config/AdminPages.php";

if(!AccountUtility::isLoggedIn()) {
    header("Location: admin.php?page=".AdminPages::LOGIN);
}