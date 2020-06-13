<?php

namespace AgileWeb\Controllers;

use Controllers\Router;

class HomeController
{

    /** @var Router */
    private $router;

    /**
     * HomeController constructor.
     * @param $router Router
     * @param $params String[]
     */
    public function __construct($router, $url, $params)
    {
        $this->agileOffice();
    }

    private function agileOffice(){
        ob_start();
        $description = "Passez au numérique avec Agile-Office. Un site web à vôtre image pour vôtre entreprise muni d'un système de gestion de commandes, de clients ou encore de produits unique en son genre.";
        $canonical = public_url();
        require_once APPLICATION_PATH . "/views/agile-office.htm.php";
        $content = ob_get_clean();
        require_once APPLICATION_PATH . "/views/template.htm.php";
    }


}
