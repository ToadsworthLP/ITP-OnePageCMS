<?php
include_once "common/utility/Settings.php";
include_once "common/utility/EMail.php";

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) &&
    Settings::get(SettingsConfig::CONTACT_ADDRESS) !== "") {
    $mail = new EMail();
    $mail->from($_POST["email"], $_POST["name"])
         ->to(Settings::get(SettingsConfig::CONTACT_ADDRESS), Settings::get(SettingsConfig::CONTACT_NAME))
         ->subject($_POST["subject"]);

    $mail->body(Settings::get(SettingsConfig::CONTACT_EMAIL_HEADER)."\n"
        .$_POST["message"]."\n"
        .Settings::get(SettingsConfig::CONTACT_EMAIL_FOOTER)."\n"
        .$_POST["name"]." (".$_POST["email"].")");

    $mail->send();
}
