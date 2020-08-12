<?php
require_once "modelos/modelo_direccion.php";
require_once "funciones/helpers.php";
$nombrePagina = "Dirección";
//Incluir los modelos
require_once "modelos/modelo_ciudad.php";
$ciudades = obtenerCiudades($conexion);
$infoDirecciones = obtenerInfoDirecciones($conexion);

$direccion = $_POST['direccion'] ?? "";
$direccion2 = $_POST['direccion2'] ?? "";
$distrito = $_POST['distrito'] ?? "";
$ciudad = $_POST['ciudad'] ?? "";
$codigoPostal = $_POST['codigoPostal'] ?? "";
$telefono = $_POST['telefono'] ?? "";
$ubicacion = $_POST['ubicacion'] ?? "";


try {
    if (isset($_POST['guardarDireccion'])) {
        //codigo para guardar en la BD


        if (empty($direccion)) {
            throw new Exception("El campo dirección principal está vacio");
        }
        if (empty($direccion2)) {
            throw new Exception("El campo dirección 2 está vacio");
        }
        if (empty($distrito)) {
            throw new Exception("El campo distrito está vacio");
        }
        if (empty($ciudad)) {
            throw new Exception("El campo ciudad está vacio");
        }
        if (empty($codigoPostal)) {
            throw new Exception("El campo código postal está vacio");
        }
        if (empty($telefono)) {
            throw new Exception("El campo teléfono está vacio");
        }

        $datos = compact('direccion', 'direccion2', 'distrito', 'ciudad', 'codigoPostal', 'telefono');
        //Insertar los datos
        $direccionInsertada = insertarDireccion($conexion, $datos);

        $mensajes = "Datos insertados correctamente...";
        if (!$direccionInsertada) {
            throw new Exception("Ocurrió un error al insertar los datos de la dirección");
        }
        //redireccionar la pagina
        redireccionar('direccion.php');


    }
} catch (Exception $e) {
    $error = $e->getMessage();
}

include_once "vistas/vista_direccion.php";