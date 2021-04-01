<?php
include_once "admin/utility/IIncludeSwitchConfig.php";

class AdminPages implements IIncludeSwitchConfig
{
    const LOGIN = 0;
    const DASHBOARD = 1;

    public function getMapping(): array
    {
        return [
            AdminPages::LOGIN => "admin/page/LoginPage.php",
            AdminPages::DASHBOARD => "admin/page/DashboardPage.php"
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