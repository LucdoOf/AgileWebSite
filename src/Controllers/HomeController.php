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
        require_once APPLICATION_PATH . "/views/agile-office.htm.php";
        $content = ob_get_clean();
        require_once APPLICATION_PATH . "/views/template.htm.php";
    }


}
