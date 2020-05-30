<?php

namespace AgileWeb\Controllers;

use Controllers\Router;
use Inc\Mailer;

class ContactController
{

    /** @var Router */
    private $router;

    /**
     * ContactController constructor.
     * @param $router Router
     * @param $params String[]
     */
    public function __construct($router, $url, $params)
    {
        $this->router = $router;
        if(isset($_POST["submit"])) {
            if (isset($_POST["mail"])) {
                if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
                    if (isset($_POST["subject"]) && !ctype_space($_POST["subject"])) {
                        if (isset($_POST["content"]) && !ctype_space($_POST["content"]) && strlen($_POST["content"]) >= 100) {
                            Mailer::sendMail(Mailer::CONTACT_MAIL, "contactForm.html", $_POST, "Formulaire de contact: " . $_POST["subject"], $_POST["mail"]);
                            $this->contact("Nous avons bien reçu votre message, nous vous répondrons par mail au plus vite", true);
                        } else {
                            $this->contact("Veuillez renseigner une demande d'au moins 100 caractères", false);
                        }
                    } else {
                        $this->contact("Veuillez renseigner un objet à votre demande", false);
                    }
                } else {
                    $this->contact("L'email renseigné est invalide", false);
                }
            } else {
                $this->contact("Veuillez renseigner votre mail", false);
            }
        } else {
            $this->contact();
        }
    }

    private function contact($message = NULL, $success = NULL){
        ob_start();
        require_once APPLICATION_PATH . "/views/contact.htm.php";
        $content = ob_get_clean();
        require_once APPLICATION_PATH . "/views/template.htm.php";
    }


}
