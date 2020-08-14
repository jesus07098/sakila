<?php
require_once "funciones/helpers.php";
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

function eliminarIdioma($conexion, $datos)
{
    //primero elimino relaciones en cascada
    $sql = " UPDATE film SET language_id=1 WHERE language_id = :idIdioma;
             UPDATE film SET original_language_id=NULL WHERE original_language_id = :idIdioma;
             DELETE FROM language WHERE language_id = :idIdioma;";

    return $conexion->prepare($sql)->execute($datos);
}

function obtenerIdiomaPorId($conexion, $datos)
{
    $sql = "SELECT * FROM language where language_id = :idIdioma;";
    $query = $conexion->prepare($sql);
    $query->execute($datos);
    return $query->fetch();
}

function editarIdioma($conexion, $datos)
{
    $sql = "UPDATE language SET name = :nombreIdioma WHERE language_id = :idIdioma ;";
    return $conexion->prepare($sql)->execute($datos);
}

//funcion para no repetir un registro
function verificarIdiomaPorNombre($conexion, $datos)
{
    $sql = "SELECT COUNT(*) as cantidad FROM language  WHERE name = :nombreIdioma;";
    $query = $conexion->prepare($sql);
    $query->execute($datos);
    return $query->fetch();
}
