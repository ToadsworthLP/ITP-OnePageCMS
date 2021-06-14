<?php
include_once "common/gateway/SlideGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";
include_once "common/utility/Settings.php";

RequirePermissions(PermissionConfig::STAFF);

if(isset($_POST["id"])) {
    $slide = SlideGateway::fetch(["_ORDER_ASC" => "slide_order"]);

    if($slide == null) { // No existing slides
        $minOrder = 0;
    } else {
        $minOrder = $slide->slideOrder;
    }

    $newSlide = new Slide();
    $newSlide->slideOrder = $minOrder - 1;
    $newSlide->title = "Neue Slide";
    $newSlide->text = "";
    $newSlide->buttonText = "";
    $newSlide->buttonLink = "";
    $newSlide->buttonColor = Settings::get(SettingsConfig::PRIMARY_COLOR);
    $newSlide->buttonHoverColor = Settings::get(SettingsConfig::SECONDARY_COLOR);
    $newSlide->buttonTextColor = "#000000";
    $newSlide->setImage(null);
    $newSlide->create();
}

header("Location: ".ReturnUtility::getLink());
