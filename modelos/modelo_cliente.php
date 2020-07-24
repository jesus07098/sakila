<?php

require_once "config/conexion.php";

function obtenerInfoClientes($conexion)
{
    $sql = "select cu.customer_id,sto.store_id, cu.first_name,cu.last_name, cu.email, a.address, cu.active  from customer as cu 
          left join store as sto on cu.store_id = sto.store_id inner join address as a on cu.address_id = a.address_id";
    return $conexion->query($sql)->fetchAll();
}
function insertarClientes($conexion, $datos){
    $sql="INSERT INTO customer (store_id, first_name, last_name, email, address_id, active) VALUES (:tienda, :nombre , :apellido, :email, :direccion, :activo)";
    return $conexion->prepare($sql)->execute($datos);
}