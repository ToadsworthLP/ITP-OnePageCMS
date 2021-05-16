<?php
include_once "admin/utility/IIncludeSwitchConfig.php";

class HomepageActions implements IIncludeSwitchConfig
{
    const NONE = 0;
    const SEND_MESSAGE = 1;

    public function getMapping(): array
    {
        return [
            HomepageActions::NONE => "admin/action/NoAction.php",
            HomepageActions::SEND_MESSAGE => "homepage/action/SendMessageAction.php"
        ];
    }

    public function getParameterName(): string
    {
        return "action";
    }

    public function getParameterArray(): array
    {
        return $_GET;
    }
}
