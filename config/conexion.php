<?php

//DECLARA  LAS CONSTANTES DE LA BD

$ajustes = [
    19 => 2, //devuelve un array con los nombres de las columnas de los resultados de la BD
    3 => 2, //genera excepciones cuando hay errores en los querys
];


define("DB_DRIVER", "mysql");
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "Daniel123*");
define("DB_NAME", "sakila");
try {
    $conexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD, $ajustes);
} catch (PDOException $exception) {
    throw new Exception("Ha ocurrido un error al conectarnos a la Base de Datos {$exception->getMessage()}");

}

