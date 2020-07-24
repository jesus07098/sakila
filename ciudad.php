<?php
// incluidos
require_once "funciones/helpers.php";
require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudad.php";

//variables
$nombrePagina = "Ciudades";
$nombreCiudad = $_POST['ciudad'] ?? "";
$idPais = $_POST['pais'] ?? "";




//Asegurarnos de que el usuario haya hecho clic en el boton guardar
try {
    if (isset($_POST['guardarCiudad'])) {


        // Validaciones
        if (empty($nombreCiudad)) {
            throw new Exception("El nombre de la ciudad no puede estar vacío.");
        }
        if (empty($idPais)) {
            throw new Exception("Seleccione un país...");
        }

        // Guardar los datos
        $datos = compact('nombreCiudad', 'idPais');

        $ciudadInsertada = insertarCiudades($conexion, $datos);



        if (!$ciudadInsertada) {
            throw new Exception("Los datos no fueron insertados");
        }

    }


} catch (Exception $e) {
    $error = $e->getMessage();
}

$paises = obtenerPaises($conexion);
$ciudades = obtenerCiudades($conexion);


include_once "vistas/vista_ciudad.php";