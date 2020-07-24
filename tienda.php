<?php
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_gerente.php";
require_once "modelos/modelo_tienda.php";
include_once "funciones/helpers.php";
$direcciones = obtenerDirecciones($conexion);
$gerentes = obtenerGerente($conexion);
$infoTiendas = obtenerInfoTiendas($conexion);
$nombrePagina = "Tienda";

$gerente = $_POST['gerente'] ?? "";
$direccion = $_POST['direccion'] ?? "";

//Aseguranos de que el usuario ha hecho click en el boton

try {
    if (isset($_POST['guardarTienda'])) {
        //codigo para guardar en la BD


        if (empty($gerente)) {
            throw new Exception("El campo  del gerente está vacio");
        }
        if (empty($direccion)) {
            throw new Exception("El campo de la dirección está vacio");
        }

        $datos = compact('gerente', 'direccion');


        //Insertar los datos
        $tiendaInsertada = insertarTienda($conexion, $datos);


        if (!$tiendaInsertada) {
            throw new Exception("Ocurrió un error al insertar los datos de la tienda");
        }
        //redireccionar la pagina
        redireccionar('tienda.php');


    }
} catch (Exception $e) {
    $error = $e->getMessage();
}

include_once "vistas/vista_tienda.php";