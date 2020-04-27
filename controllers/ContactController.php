<?php

namespace Controllers;

use Controllers\Router;

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
        $this->contact();
    }

    private function contact(){
        ob_start();
        require_once APPLICATION_PATH."/views/contact.htm.php";
        $content = ob_get_clean();
        require_once APPLICATION_PATH."/views/template.htm.php";
    }


}