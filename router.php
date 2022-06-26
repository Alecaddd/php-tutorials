<?php

$request = $_SERVER["REQUEST_URI"];

switch ($request) {
    case "/":
    case "":
        require __DIR__ . "/views/home.php";
        break;

    default:
        $filename = __DIR__ . "/views" . $request . ".php";
        if (file_exists($filename)) {
            require $filename;
            break;
        }

        http_response_code(404);
        require __DIR__ . "/views/404.php";
        break;
}
