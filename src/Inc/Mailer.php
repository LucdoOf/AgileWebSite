<?php

namespace AgileWeb\Inc;

class Mailer
{

    /**
     * Dossier contenant les mails
     */
    const MAIL_DIR = APPLICATION_PATH . "/res/mails/";
    /**
     * Mail de contact
     */
    const CONTACT_MAIL = "contact@agile-web.net";
    /**
     * Mail du sérieux
     */
    const BUSINESS_MAIL = "admin@agile-web.net";
    /**
     * Mail d'envoi
     */
    const NO_REPLY = "contact@agile-web.net";
    /**
     * Fichier de base de tout les mails
     */
    const TEMPLATE_FILE = "template.html";

    /**
     * @param $to string Mail de récepetion
     * @param $fileName string Nom du template du mail
     * @param $vars array Array contenant les variables du mail
     * @param $subject string Sujet
     * @param null $from string Depuis (optionnel)
     * @return bool
     * @see retrieveMailContent
     */
    public static function sendMail($to, $fileName, $vars, $subject, $from = null)
    {
        $content = self::retrieveMailContent($fileName, $vars);
        $mail = mail($to, utf8_decode($subject), utf8_decode($content), implode("\r\n", ["From: " . (is_null($from) ? self::NO_REPLY : $from), "MIME-Version: 1.0", "Content-type: text/html; charset=utf-8"]));
        return boolval($mail);
    }

    /**
     * @param $fileName string Nom du fichier html du mail dans le dossier mail
     * @param $vars array Array contenant les variables du mail
     * @return false|string|null
     */
    private static function retrieveMailContent($fileName, $vars)
    {
        $content = file_get_contents(self::MAIL_DIR . $fileName);
        foreach ($vars as $key => $value) {
            $content = str_replace("{{" . $key . "}}", $value, $content);
        }
        $template = file_get_contents(self::MAIL_DIR . self::TEMPLATE_FILE);
        $template = str_replace("{{content}}", $content, $template);
        return $template;
    }


}
