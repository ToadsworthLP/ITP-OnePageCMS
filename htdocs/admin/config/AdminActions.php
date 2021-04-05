<?php
include_once "admin/utility/IIncludeSwitchConfig.php";

class AdminActions implements IIncludeSwitchConfig
{
    const NONE = 0;
    const LOGIN = 1;
    const LOGOUT = 2;
    const DISMISS_ALERT = 3;
    const ADD_USER = 4;

    public function getMapping(): array
    {
        return [
            AdminActions::NONE => "admin/action/NoAction.php",
            AdminActions::LOGIN => "admin/action/LoginAction.php",
            AdminActions::LOGOUT => "admin/action/LogoutAction.php",
            AdminActions::DISMISS_ALERT => "admin/action/DismissAlertAction.php",
            AdminActions::ADD_USER => "admin/action/AddUserAction.php"
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