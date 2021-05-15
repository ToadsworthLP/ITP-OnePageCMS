<?php

use PHPMailer\PHPMailer\PHPMailer;

abstract class EMailConfig
{
    const SMTP_HOST = "smtp.gmail.com";
    const SMTP_AUTH = true;
    const USERNAME = "depressnotification@gmail.com";
    const PASSWORD = "f25e2c80efec11385391d66bf26a28b4";
    const ENCRYPTION = PHPMailer::ENCRYPTION_STARTTLS;
    const PORT = 587;
}
