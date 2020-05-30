<?php

namespace AgileWeb\Controllers;

use Exception;

class Router
{

    private $_ctrl;

    /**
     * Search for a controller
     */
    public function routeReq(){
        try {
            if(isset($_GET["action"])){
                $params = [];
                if(strpos($_SERVER["REQUEST_URI"], "?") != false) {
                    $paramString = explode("&", explode("?", $_SERVER["REQUEST_URI"])[1]);
                    foreach ($paramString as $param) {
                        if (!is_null(explode("=", $param)[1])) {
                            $params[explode("=", $param)[0]] = explode("=", $param)[1];
                        }
                    }
                }

                $url = explode("/", filter_var($_GET["action"], FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0]));

                if(strpos($controller, "_") !== false){
                    $controllersExplode = explode("_", $controller);
                    $controller = "";
                    foreach ($controllersExplode as $controllerExplode){
                        $controller = $controller . ucfirst(strtolower($controllerExplode));
                    }
                }


                $controllerClass = $controller."Controller";
                $controllerFile = APPLICATION_PATH . "/src/Controllers/".$controllerClass.".php";

                if(file_exists($controllerFile)){
                    $className = "AgileWeb\\Controllers\\".$controllerClass;

                    $this->_ctrl = new $className($this, $url, $params);
                } else {
                    http_response_code(404);
                    throw new Exception('Page introuvable', 404);
                }
            } else {
                $this->_ctrl = new HomeController($this, [], []);
            }
        } catch (Exception $e){
            http_response_code($e->getCode());
            $this->_ctrl = new ErrorController($this, $e);
        }
    }
}
