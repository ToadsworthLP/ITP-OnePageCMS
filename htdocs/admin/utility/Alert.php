<?php
include_once "admin/config/SessionConfig.php";

/**
 * Represents an alert to be shown to the user.
 */
class Alert
{
    public string $type;
    public string $text;
    public int $lifetime;

    /**
     * Creates an alert object with the given properties.
     * @param string $type The type of the alert, recommended Values are stored in the AlertType class
     * @param string $text The text to be shown in the alert
     * @param bool $autoDismiss If set to true, the alert will be dismissed automatically after it has been shown once
     */
    public function __construct(string $type, string $text, bool $autoDismiss = false)
    {
        $this->type = $type;
        $this->text = $text;
        $this->lifetime = $autoDismiss ? 1 : -1; // negative values make the alert stay until explicitly dismissed by the user
    }

    /**
     * Adds this alert to the list of alerts to be shown to the user in an AlertListBlock.
     */
    public function post() {
        $currentAlerts = [];

        if(isset($_SESSION[SessionConfig::CURRENT_ALERTS])) {
            $currentAlerts = json_decode($_SESSION[SessionConfig::CURRENT_ALERTS]);
        }

        array_push($currentAlerts, $this);
        $_SESSION[SessionConfig::CURRENT_ALERTS] = json_encode($currentAlerts);
    }
}