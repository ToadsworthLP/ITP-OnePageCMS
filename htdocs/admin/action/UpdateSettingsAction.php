<?php
include_once "common/utility/Settings.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";

RequirePermissions(PermissionConfig::ADMIN);

if(isset($_POST)) {
    foreach ($_POST as $key => $value) {
        if($value === "") { // Delete the entry if it's an empty string
            Settings::set($key, null);
        } else {
            Settings::set($key, $value);
        }
    }
}

header("Location: ".ReturnUtility::getLink());
