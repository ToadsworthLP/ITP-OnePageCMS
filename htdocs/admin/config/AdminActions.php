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
    const ADD_BLOCK = 8;
    const EDIT_BLOCK = 9;
    const DELETE_BLOCK = 10;
    const CHANGE_BLOCK_ORDER = 11;
    const UPLOAD_IMAGE = 12;
    const DELETE_IMAGE = 13;
    const RENAME_IMAGE = 14;

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
            AdminActions::DELETE_USER => "admin/action/DeleteUserAction.php",
            AdminActions::ADD_BLOCK => "admin/action/AddBlockAction.php",
            AdminActions::EDIT_BLOCK => "admin/action/EditBlockAction.php",
            AdminActions::DELETE_BLOCK => "admin/action/DeleteBlockAction.php",
            AdminActions::CHANGE_BLOCK_ORDER => "admin/action/ChangeBlockOrderAction.php",
            AdminActions::UPLOAD_IMAGE => "admin/action/UploadImageAction.php",
            AdminActions::DELETE_IMAGE => "admin/action/DeleteImageAction.php",
            AdminActions::RENAME_IMAGE => "admin/action/RenameImageAction.php"
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