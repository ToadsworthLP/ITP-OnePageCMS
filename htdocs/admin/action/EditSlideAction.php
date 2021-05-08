<?php
include_once "common/gateway/SlideGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";
include_once "common/gateway/FileGateway.php";

RequirePermissions(PermissionConfig::STAFF);

if(isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["text"]) && isset($_POST["buttonText"])
    && isset($_POST["buttonLink"]) && isset($_POST["buttonColor"]) && isset($_POST["buttonHoverColor"])
    && isset($_POST["buttonTextColor"]) && isset($_POST["image"])) {

    $slide = SlideGateway::fetch(["id" => $_POST["id"]]);
    $slide->title = $_POST["title"];
    $slide->text = $_POST["text"];
    $slide->buttonText = $_POST["buttonText"];
    $slide->buttonLink = $_POST["buttonLink"];
    $slide->buttonColor = $_POST["buttonColor"];
    $slide->buttonHoverColor = $_POST["buttonHoverColor"];
    $slide->buttonTextColor = $_POST["buttonTextColor"];

    if($_POST["image"] == "") { // Clear image reference
        $slide->forceImageID(null);
    } else {
        $slide->setImage(FileGateway::fetch(["id" => $_POST["image"]]));
    }

    $slide->update();
}

header("Location: ".ReturnUtility::getLink());
