<?php

namespace Controllers;

use Controllers\Router;

class HomeController
{

    /** @var Router */
    private $router;

    /**
     * LoginController constructor.
     * @param $router Router
     * @param $params String[]
     */
    public function __construct($router, $url, $params)
    {
        $this->router = $router;
        $this->home();
    }

    private function home(){
        require_once APPLICATION_PATH."/views/home.php";
    }


}