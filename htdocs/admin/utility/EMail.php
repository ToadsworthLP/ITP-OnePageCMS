<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';
include_once "admin/config/EMailConfig.php";

class EMail
{
    private PHPMailer $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->mail->isSMTP();
        $this->mail->Host       = EMailConfig::SMTP_HOST;
        $this->mail->SMTPAuth   = EMailConfig::SMTP_AUTH;
        $this->mail->Username   = EMailConfig::USERNAME;
        $this->mail->Password   = EMailConfig::PASSWORD;
        $this->mail->SMTPSecure = EMailConfig::ENCRYPTION;
        $this->mail->Port       = EMailConfig::PORT;
    }

    /**
     * Adds a sender address and name.
     * @param string $address The e-mail address of the sender
     * @param string $name The name of the sender
     * @return EMail
     * @throws Exception
     */
    public function from(string $address, string $name) : EMail {
        $this->mail->setFrom($address, $name);
        return $this;
    }

    /**
     * Adds a recipient address and name.
     * @param string $address The e-mail address of the recipient
     * @param string $name The name of the recipient
     * @return $this
     * @throws Exception
     */
    public function to(string $address, string $name) : EMail {
        $this->mail->addAddress($address, $name);
        return $this;
    }

    /**
     * Adds a subject.
     * @param string $subject The subject text of the e-mail
     * @return $this
     */
    public function subject(string $subject) : EMail {
        $this->mail->Subject = $subject;
        return $this;
    }

    /**
     * Adds a body.
     * @param string $body The message body
     * @return $this
     */
    public function body(string $body) : EMail {
        $this->mail->Body = $body;
        return $this;
    }

    /**
     * Adds an alternative plain-text body which is shown if the recipient's e-mail client does not support HTML e-mails.
     * @param string $body The message body
     * @return $this
     */
    public function altBody(string $body) : EMail {
        $this->mail->AltBody = $body;
        return $this;
    }

    /**
     * Adds a HTML-formatted body.
     * @param string $html The message body
     * @return $this
     */
    public function html(string $html) : EMail {
        $this->mail->isHTML(true);
        $this->mail->Body = $html;
        return $this;
    }

    /**
     * Sends the e-mail.
     * @throws Exception
     */
    public function send() {
        $this->mail->send();
    }
}
