<?php
include_once "admin/utility/AccountUtility.php";
include_once "admin/config/AdminPages.php";
include_once "admin/config/AdminActions.php";

function Navbar() {
    $linkBase = "admin.php?page=";

    $username = AccountUtility::getCurrentUser()->username;

    // TODO set correct pages instead of these placeholder values
    $dashboard = $linkBase.AdminPages::DASHBOARD;
    $editor = $linkBase.AdminPages::EDITOR;
    $footer = $linkBase.AdminPages::DASHBOARD;
    $users = $linkBase.AdminPages::USER_MANAGEMENT;
    $media = $linkBase.AdminPages::MEDIA;
    $contact = $linkBase.AdminPages::DASHBOARD;
    $settings = $linkBase.AdminPages::DASHBOARD;
    $help = $linkBase.AdminPages::DASHBOARD;
    $profile = $linkBase.AdminPages::USER_MANAGEMENT."&editSelf=true";
    $logout = $linkBase.AdminPages::LOGIN."&action=".AdminActions::LOGOUT;

    include "admin/template/NavbarTemplate.php";
}