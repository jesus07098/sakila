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



function eliminarCategoria($conexion, $datos)
{
    $sql = "DELETE FROM film_category WHERE category_id = :idCategoria;
           DELETE FROM category WHERE category_id = :idCategoria;";
    return $conexion->prepare($sql)->execute($datos);
}



function obtenerCategoriasPorId($conexion, $datos)
{
    $sql = "SELECT * FROM category where category_id = :idCategoria;";
    $query = $conexion->prepare($sql);
    $query->execute($datos);
    return $query->fetch();
}

function editarCategoria($conexion, $datos)
{
    $sql = "UPDATE category SET name=:nombreCategoria WHERE category_id = :idCategoria;";
    return $conexion->prepare($sql)->execute($datos);
}