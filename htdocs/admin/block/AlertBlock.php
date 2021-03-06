<?php
include_once "admin/config/AdminActions.php";

/**
 * Displays a single alert block with the given contents.
 * @param object $alert The alert object describing the alert to display
 * @param int $index The index of the alert object in the alerts array (ignored if the dismiss button is disabled)
 * @param bool $enableDismissButton Whether to display a button to dismiss this notification
 */
function AlertBlock(object $alert, int $index, bool $enableDismissButton = true) {
    $class = $alert->type;
    $text = $alert->text;

    include "admin/template/AlertTemplate.php";
}
