<?php

namespace Controllers;

use Controllers\Router;
use Exception;

class ErrorController
{

    /** @var Router */
    private $router;

    /**
     * LoginController constructor.
     * @param $router Router
     * @param $error Exception
     */
    public function __construct($router, $error)
    {
        $this->router = $router;
        $this->error($error);
    }

    private function error($error){
        require_once APPLICATION_PATH."/views/error.php";
    }


}