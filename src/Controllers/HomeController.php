<?php

namespace AgileWeb\Controllers;

use Exception;

class HomeController {

    /** @var Router */
    private $router;

    /**
     * HomeController constructor.
     *
     * @param $router Router
     * @param $url
     * @param $params String[]
     * @throws Exception
     */
    public function __construct($router, $url, $params) {
        $this->home();
    }

    private function home(){
        ob_start();
        $description = "Agile-Web.net, votre agence de développement web à Tours pour tout vos projets. Nous développons votre E-commerce, votre solution sur mesure ou encore votre logiciel SASS.";
        $canonical = public_url();
        require_once APPLICATION_PATH . "/views/home.htm.php";
        $content = ob_get_clean();
        $absoluteHeader = true;
        require_once APPLICATION_PATH . "/views/template.htm.php";
    }

}
