<?php
include_once "admin/config/SessionConfig.php";
include_once "admin/utility/ReturnUtility.php";

/*
 * Dismisses the alert at the given index
 * */
if(isset($_POST["index"])) {
    $targetIndex = $_POST["index"];

    $alerts = json_decode($_SESSION[SessionConfig::CURRENT_ALERTS]);
    array_splice($alerts, $targetIndex, 1);

    if(count($alerts) > 0) {
        $_SESSION[SessionConfig::CURRENT_ALERTS] = json_encode($alerts);
    } else {
        unset($_SESSION[SessionConfig::CURRENT_ALERTS]);
    }
}

header("Location: ".ReturnUtility::getLink());