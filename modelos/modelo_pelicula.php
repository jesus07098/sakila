<?php

require_once "config/conexion.php";


function obtenerInfoPeliculas($conexion)
{
    $sql = "select fi.film_id, fi.title , fi.description , fi.release_year , lan.name as idioma_oficial, la.name 
       as idioma_sec, fi.rental_duration, fi.rental_rate,
       fi.length, fi.replacement_cost, fi.rating, fi.special_features  from film as fi 
       inner join language as lan on fi.language_id = lan.language_id
       left join language as la on fi.original_language_id = la.language_id;";

    return $conexion->query($sql)->fetchAll();
}

function insertarPelicula($conexion, $datos)
{
    $sql = 'INSERT INTO film (title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, 
                  replacement_cost, rating, special_features) 
    VALUES (:titulo, :descripcion, :anoLanzamiento, :idioma, :idioma2, :rentaDuracion, :tasaArrendamiento, :tamano, :costoReemplazo, 
            :clasificacion, :caracteristicasEspeciales)';
    return $conexion->prepare($sql)->execute($datos);
}
