<?php

require_once "config/conexion.php";


function obtenerCiudades($conexion)
{
    $sql = "SELECT ci.city_id, ci.city, co.country 
          FROM city as ci INNER JOIN country as co ON ci.country_id=co.country_id ORDER BY ci.city_id DESC";
    return $conexion->query($sql)->fetchAll();

}



function insertarCiudades($conexion, $datos)
{
    $sql = 'insert into city (city, country_id) VALUES (:nombreCiudad, :idPais)';
    return $conexion->prepare($sql)->execute($datos); // prepare: Prepara una sentencia SQL para ser ejecutada por el método
}



function eliminarCiudad($conexion, $datos)
{
    $sql = "UPDATE address SET city_id = 1 WHERE city_id = :idCiudad; 
            DELETE FROM city WHERE city_id = :idCiudad;";
    return $conexion->prepare($sql)->execute($datos);
}



function obtenerCiudadPorId($conexion, $datos)
{
    $sql = "SELECT * FROM city where city_id = :idCiudad;";
    $query = $conexion->prepare($sql);
    $query->execute($datos);
    return $query->fetch(); //Obtiene una fila de un conjunto de resultados asociado al objeto PDO
}

function editarCiudades($conexion, $datos)
{
    $sql = "UPDATE city SET city=:nombreCiudad, country_id = :idPais WHERE city_id = :idCiudad;";
    return $conexion->prepare($sql)->execute($datos);
}


