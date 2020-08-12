<?php

//DECLARA  LAS CONSTANTES DE LA BD

$ajustes = [
    19 => 2, //devuelve un array con los nombres de las columnas de los resultados de la BD
    3 => 2, //genera excepciones cuando hay errores en los querys
];

//Valores de mi base de datos local (mi pc)//
$host = "localhost";
$dbname = "sakila";
$usuario = "root";
$password = "Daniel123*";

/*
define("DB_DRIVER", "mysql");
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "Daniel123*");
define("DB_NAME", "sakila");
*/

//Valores de mi base de datos de 000webhost//
if($_SERVER['SERVER_NAME'] === 'rubycode.000webhostapp.com') {
    $host = "localhost";
    $dbname = "id12551219_sakila";
    $usuario = "id12551219_jesus";
    $password = "_WZ]4s#pyN<GG-PQ";
}

try{
    $conexion = new PDO("mysql:host={$host}; dbname={$dbname}", $usuario, $password);
}catch(PDOException $exception){
    throw new Exception("Hubo un error al conectarnos a la base de datos: {$exception->getMessage()}");
    //array_push($errores, $exception -> getMessage());
}
