<?php
include_once "admin/config/AdminActions.php";

/**
 * Displays a login form
 */
function Login() {

    $username = "";
    if(isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
    }

    $rememberUser = false;
    if(isset($_COOKIE["rememberUser"])) {
        $rememberUser = true;
    }

    include "admin/template/LoginTemplate.php";
}
