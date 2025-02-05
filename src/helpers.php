<?php

function resource($type, $file){
    return DOMAIN . RELATIVE_DIR . "/res/" . $type . "/" . $file;
}

function script($fileName){
    return DOMAIN . RELATIVE_DIR . "/scripts/" . $fileName;
}

function public_url(){
    return DOMAIN . RELATIVE_DIR;
}

function route($route){
    return public_url() . $route;
}

function actual_url(){
    return DOMAIN . $_SERVER["REQUEST_URI"];
}
