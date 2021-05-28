<?php
include_once "common/model/User.php";
include_once "common/gateway/UserGateway.php";
include_once "common/utility/Settings.php";
include_once "common/utility/EMail.php";
include_once "admin/utility/AccountUtility.php";
include_once "admin/utility/Alert.php";
include_once "admin/utility/AlertType.php";

if(isset($_POST["targetUser"])) {
    $targetUser = UserGateway::fetch(["id" => $_POST["targetUser"]]);
    $cleartext = bin2hex(random_bytes(12));

    $mail = new EMail();
    $mail->from(EMailConfig::USERNAME, "De-Press")
        ->to($targetUser->email, $targetUser->username)
        ->subject("De-Press Password Reset");

    $mail->body(
        "Ein Administrator der Seite ".Settings::get(SettingsConfig::PAGE_TITLE)." hat ihr Passwort zurückgesetzt.".
        "Verwenden Sie bei Ihrem nächsten Login daher das folgende Passwort:\n\n".$cleartext."\n\n".
        "Es wird empfohlen, dieses rasch unter Benutzer -> Profil bearbeiten durch ein eigenes, sicheres Passwort zu ersetzen."
    );

    try {
        $mail->send();

        $hashed = AccountUtility::hash($cleartext);
        $targetUser->password = $hashed;
        $targetUser->update();

        $success = new Alert(AlertType::SUCCESS, "Das Passwort wurde erfolgreich zurückgesetzt und dem betroffenen User per E-Mail übermittelt.", true);
        $success->post();
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        $error = new Alert(AlertType::WARNING, "Die Passwort-Reset-E-Mail konnte nicht gesendet werden.", true);
        $error->post();
    }
}

header("Location: ".ReturnUtility::getLink());
