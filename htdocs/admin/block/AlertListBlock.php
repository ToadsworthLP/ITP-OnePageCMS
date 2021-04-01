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

        for ($i = 0; $i < sizeof($currentAlerts); $i++) {
            $alertObj = $currentAlerts[$i];
            $alert = new Alert($alertObj->type, $alertObj->text, $alertObj->autoDismiss);

            if($alert->isAutoDismiss()) { // Dismiss automatically
                array_splice($currentAlerts, $i, 1);

                if(count($currentAlerts) > 0) {
                    $_SESSION[SessionConfig::CURRENT_ALERTS] = json_encode($currentAlerts);
                } else {
                    unset($_SESSION[SessionConfig::CURRENT_ALERTS]);
                }
            }

            AlertBlock($alert, $i, !$alert->isAutoDismiss());
        }
    }
}