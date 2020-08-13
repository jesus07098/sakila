<?php

require_once "config/conexion.php";

/**
 * obtener los actores registrados en la tabla actor
 * @param $conexion
 * @return mixed
 */

function obtenerActores($conexion)
{
    $sql = "SELECT * FROM actor;";
    return $conexion->query($sql)->fetchAll();

}

/**
 * Insertar los actores en la tabla actor
 * @param PDO $conexion
 * @param array $datos
 * @return mixed
 */

function insertarActores($conexion, $datos)
{
    $sql = "INSERT INTO actor(first_name, last_name) VALUES (:nombreActor, :apellidoActor);";
    return $conexion->prepare($sql)->execute($datos);
}

function eliminarActores($conexion, $datos)
{
    $sql = "DELETE FROM film_actor WHERE actor_id = :idActor;
           DELETE FROM actor WHERE actor_id = :idActor;";
    return $conexion->prepare($sql)->execute($datos);
}

function obtenerActoresPorId($conexion, $datos)
{
    $sql = "SELECT * FROM actor where actor_id = :idActor;";
    $query = $conexion->prepare($sql);
    $query->execute($datos);
    return $query->fetch();
}

function editarActores($conexion, $datos)
{
    $sql = "UPDATE actor SET first_name=:nombreActor, last_name = :apellidoActor WHERE actor_id = :idActor ;";
    return $conexion->prepare($sql)->execute($datos);
}
function obtenerActoresPorNombre($conexion, $datos)
{

    $sql = "SELECT COUNT(*) FROM actor where first_name = :nombreActor;";
    $query = $conexion->prepare($sql);
    $query->execute($datos);
    return $query->fetch();
}



