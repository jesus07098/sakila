<?php

require_once "config/conexion.php";

function obtenerIdioma($conexion)
{
    $sql = "SELECT language_id, name FROM language ";
    return $conexion->query($sql)->fetchAll();
}

function insertarIdioma($conexion, $datos)
{
    $sql = 'INSERT INTO language (name) VALUES (:nombreIdioma)';
    return $conexion->prepare($sql)->execute($datos);
}