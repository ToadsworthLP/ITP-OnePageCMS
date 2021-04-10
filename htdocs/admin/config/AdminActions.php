<?php
include_once "admin/utility/IIncludeSwitchConfig.php";

class AdminActions implements IIncludeSwitchConfig
{
    const NONE = 0;
    const LOGIN = 1;
    const LOGOUT = 2;
    const DISMISS_ALERT = 3;
    const ADD_USER = 4;
    const EDIT_USER = 5;
    const RESET_PASSWORD = 6;
    const DELETE_USER = 7;

    public function getMapping(): array
    {
        return [
            AdminActions::NONE => "admin/action/NoAction.php",
            AdminActions::LOGIN => "admin/action/LoginAction.php",
            AdminActions::LOGOUT => "admin/action/LogoutAction.php",
            AdminActions::DISMISS_ALERT => "admin/action/DismissAlertAction.php",
            AdminActions::ADD_USER => "admin/action/AddUserAction.php",
            AdminActions::EDIT_USER => "admin/action/EditUserAction.php",
            AdminActions::RESET_PASSWORD => "", // TODO add password reset
            AdminActions::DELETE_USER => "" // TODO add user deletion
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