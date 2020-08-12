<?php
require_once "config/conexion.php";


function obtenerPaises($conexion)
{
    $sql = "SELECT country_id, country FROM country";
    return $conexion->query($sql)->fetchAll();

}

function insertarPaises($conexion, $datos)
{

    $sql = "INSERT INTO country (country) VALUES (:nombrePais)";

    return $conexion->prepare($sql)->execute($datos);
}

function eliminarPaises($conexion, $datos)
{
    $sql = "UPDATE city set country_id=1 WHERE country_id=:idPais;
            DELETE FROM country WHERE country_id = :idPais;";
    return $conexion->prepare($sql)->execute($datos);
}

function obtenerPaisesPorId($conexion, $datos)
{
    $sql = "SELECT * FROM country where country_id = :idPais;";
    $query = $conexion->prepare($sql);
    $query->execute($datos);
    return $query->fetch();
}

function editarPais($conexion, $datos)
{
    $sql = "UPDATE country SET country=:nombrePais WHERE country_id = :idPais;";
    return $conexion->prepare($sql)->execute($datos);
}


