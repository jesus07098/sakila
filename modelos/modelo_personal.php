<?php

require_once "config/conexion.php";

function obtenerInfoPersonales($conexion)
{
    $sql = "select sta.staff_id, sta.first_name, sta.last_name ,ad.address, sta.picture, sta.email, sto.store_id,
 sta.active, sta.username, sta.password
from staff as sta left join address as ad on sta.address_id= ad.address_id  left join store as sto on sta.store_id= sto.store_id";
    return $conexion->query($sql)->fetchAll();
}

function insertarPersonal($conexion, $datos){
    $sql= "INSERT INTO staff (first_name, last_name, address_id, picture, email, store_id, active, username, password) 
values (:nombre, :apellido, :direccion, :imagen, :email, :idTienda, :activo, :username, :password)";
    return $conexion->prepare($sql)->execute($datos);
}
