<?php

require_once "config/conexion.php";

function obtenerCategoria($conexion)
{
    $sql = "SELECT * FROM category;";
    return $conexion->query($sql)->fetchAll();
}

function insertarCategoria($conexion, $datos)
{
    $sql = 'INSERT INTO category(name) VALUES (:nombreCategoria)';
    return $conexion->prepare($sql)->execute($datos);
}