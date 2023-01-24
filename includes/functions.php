<?php

if (!function_exists('dump')) {
    function dump($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
} else {
    echo "La function existe déjà";
}

if (!function_exists('get_page')) {
    function get_page($pageName)
    {
        require_once "pages/" . $pageName . ".php";
    }
}

if (!function_exists('get_url')) {
    function get_url($route, $pageName)
    {
        $active = $_SERVER['REQUEST_URI'] == $route ? "active" : "";

        return "<a class='nav-link $active' href='$route' >$pageName</a>";
    }
}


if (!function_exists('get_traitement_page')) {
    function get_traitement_page($pageName)
    {
        return  str_replace("\\", "/", dirname(__DIR__ . DIRECTORY_SEPARATOR . '../controllers' . DIRECTORY_SEPARATOR) . "$pageName.php");
    }
}