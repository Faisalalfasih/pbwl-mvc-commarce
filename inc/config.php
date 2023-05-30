<?php

// Laporan error
error_reporting(E_ALL);

// Mulai sesi
session_start();

// Url -
define("URL", "http://localhost/SI3/mvccrud-faisalalfasih");
define("AST", URL . "/layouts/assets");
define("AUTHOR", "Faisal Al Fasih");
define("FOOTER", "Copyright &copy; 2023. Designed by " . AUTHOR);

// Path root
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Autoload
require_once ROOT . "vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
