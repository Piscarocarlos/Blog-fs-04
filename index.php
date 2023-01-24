<?php

require_once("includes/functions.php");
require_once("partials/header.php");
session_start();
$uri =  $_SERVER['REQUEST_URI'];

switch ($uri) {
    case "/":
        get_page('home');
        break;

    case "/articles":
        get_page('articles');
        break;


    case "/contact-us":
        get_page('contact');
        break;

    case "/register":
        get_page('register');
        break;

    default:
        echo "Error 404 Not Found";
        break;
}



require_once("partials/footer.php");