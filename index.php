<?php

$request = $_SERVER["REQUEST_URI"];

switch ($request) {
    case "/":
    case "":
        require "home.php";
        break;

    case "/about":
        require "about.php";
        break;

    case "/contact":
        require "contact.php";
        break;

    default:
        http_response_code(404);
        require "404.php";
        break;
}
