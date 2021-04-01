<?php
include_once "admin/config/SessionConfig.php";

/**
 * Represents an alert to be shown to the user.
 */
class Alert implements JsonSerializable
{
    private string $type;
    private string $text;
    private bool $autoDismiss;

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
        $this->autoDismiss = $autoDismiss;
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

    /**
     * Gets the type of this alert. The type name is also used as a CSS class in AlertTemplate.
     * @return string The type name
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Gets the text of this alert.
     * @return string The text to be shown
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Whether to dismiss this alert automatically after it has been shown to the user once.
     * @return bool
     */
    public function isAutoDismiss(): bool
    {
        return $this->autoDismiss;
    }

    public function jsonSerialize(): array
    {
        return [
            "type" => $this->type,
            "text" => $this->text,
            "autoDismiss" => $this->autoDismiss
        ];
    }
}