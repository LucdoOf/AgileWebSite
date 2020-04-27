<?php

namespace Controllers;

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
        $this->router = $router;
        $this->home();
    }

    private function home(){
        ob_start();
        require_once APPLICATION_PATH . "/views/home.htm.php";
        $content = ob_get_clean();
        require_once APPLICATION_PATH . "/views/template.htm.php";
    }


}