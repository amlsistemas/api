<?php

/* Mostrar errores */

ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log", "c:/xammp1/htdocs/apirest-dinamica/php_error_log");

/*Requerimientos */



require_once "controllers/routes.controller.php";

$index = new RoutesController();
$index -> index();