<?php
include_once "admin/utility/IIncludeSwitchConfig.php";

class AdminPages implements IIncludeSwitchConfig
{
    const LOGIN = 0;
    const DASHBOARD = 1;
    const USER_MANAGEMENT = 2;
    const MEDIA = 3;
    const EDITOR = 4;
    const CONTACT = 5;
    const MISC = 6;
    const HELP = 7;

    public function getMapping(): array
    {
        return [
            AdminPages::LOGIN => "admin/page/LoginPage.php",
            AdminPages::DASHBOARD => "admin/page/DashboardPage.php",
            AdminPages::USER_MANAGEMENT => "admin/page/UserManagementPage.php",
            AdminPages::MEDIA => "admin/page/MediaManagementPage.php",
            AdminPages::EDITOR => "admin/page/SiteEditorPage.php",
            AdminPages::CONTACT => "admin/page/ContactFormPage.php",
            AdminPages::MISC => "admin/page/MiscPage.php",
            AdminPages::HELP => "admin/page/HelpPage.php"
        ];
    }

    public function getParameterName(): string
    {
        return "page";
    }

    public function getParameterArray(): array
    {
        return $_GET;
    }
}