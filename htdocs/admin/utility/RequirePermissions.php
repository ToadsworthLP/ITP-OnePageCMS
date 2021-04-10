<?php
include_once "admin/utility/AccountUtility.php";
include_once "admin/utility/ReturnUtility.php";
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";

/**
 * Redirects the user to the dashboard page if the permission level of the current user's role is lower than the given one.
 * @param int $permissionLevel The permission level to check against
 * @param int $redirectTarget The page to redirect the user to. If none is provided, the previously visited page is used.
 */
function RequirePermissions(int $permissionLevel, int $redirectTarget = -1) {
    $currentUserPerms = AccountUtility::getCurrentUser()->getRole()->permissions;
    if($currentUserPerms < $permissionLevel) {
        $error = new Alert(AlertType::WARNING, "You do not have the required permissions.", true);
        $error->post();

        if($redirectTarget !== -1) {
            header("Location: admin.php?page=".$redirectTarget);
        } else {
            header("Location: ".ReturnUtility::getLink());
        }
    }
}