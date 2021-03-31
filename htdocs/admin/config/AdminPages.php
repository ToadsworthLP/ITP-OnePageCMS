<?php
include_once "common/utility/IIncludeSwitchConfig.php";

class AdminPages implements IIncludeSwitchConfig
{
    const HOME = 0;

    public function getMapping(): array
    {
        return [
            AdminPages::HOME => "admin/page/dashboard.php"
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