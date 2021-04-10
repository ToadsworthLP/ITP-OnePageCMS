<?php
include_once "admin/utility/AccountUtility.php";
include_once "admin/utility/ReturnUtility.php";

/**
 * Aborts the action this function is called in if the permission level of the current user's role is lower than the given one.
 * @param int $permissionLevel The permission level to check against.
 */
function RequirePermissions(int $permissionLevel) {
    $currentUserPerms = AccountUtility::getCurrentUser()->getRole()->permissions;
    if($currentUserPerms < $permissionLevel) {
        $error = new Alert(AlertType::WARNING, "You do not have the required permissions for this action.", true);
        $error->post();
        header("Location: ".ReturnUtility::getLink());
    }
}