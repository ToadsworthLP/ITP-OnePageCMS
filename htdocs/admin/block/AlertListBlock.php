<?php
include_once "admin/block/AlertBlock.php";
include_once "admin/utility/Alert.php";
include_once "admin/config/SessionConfig.php";

/**
 * Displays a list of alert blocks according to the CURRENT_ALERTS stored in the user's session.
 * Automatically dismisses alerts where $autoDismiss is set to true after showing them once.
 */
function AlertListBlock() {
    if(isset($_SESSION[SessionConfig::CURRENT_ALERTS])) {
        $currentAlerts = json_decode($_SESSION[SessionConfig::CURRENT_ALERTS]);
        $modified = false;

        for ($i = 0; $i < sizeof($currentAlerts); $i++) {
            $alert = $currentAlerts[$i];

            if($alert->lifetime > 0) { // Decrease alert lifetime
                $alert->lifetime--;
                $modified = true;
            } elseif ($alert->lifetime == 0) { // Dismiss automatically
                array_splice($currentAlerts, $i, 1);
                $modified = true;
            }

            AlertBlock($alert, $i, $alert->lifetime < 0);
        }

        if($modified) { // Reserialize the alert list only if it was changed
            if(count($currentAlerts) > 0) {
                $_SESSION[SessionConfig::CURRENT_ALERTS] = json_encode($currentAlerts);
            } else {
                unset($_SESSION[SessionConfig::CURRENT_ALERTS]);
            }
        }
    }
}