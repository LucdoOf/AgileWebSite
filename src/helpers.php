<?php

function resource($type, $file){
    return DOMAIN . RELATIVE_DIR . "/res/" . $type . "/" . $file;
}

function route($route){
    return DOMAIN . RELATIVE_DIR . $route;
}
