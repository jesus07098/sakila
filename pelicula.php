<?php

require_once "funciones/helpers.php";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_pelicula.php";

//Nombre de la pagina
$nombrePagina = "Película";

$titulo = $_POST['titulo'] ?? "";
$descripcion = $_POST['descripcion'] ?? "";
$anoLanzamiento = $_POST['anoLanzamiento'] ?? "";
$idioma = $_POST['idioma'] ?? "";
$idioma2 = $_POST['idioma2'] ?? "";
$rentaDuracion = $_POST['rentaDuracion'] ?? "";
$tasaArrendamiento = $_POST['tasaArrendamiento'] ?? "";
$tamano = $_POST['tamano'] ?? "";
$costoReemplazo = $_POST['costoReemplazo'] ?? "";
$clasificacion = $_POST['clasificacion'] ?? "";
$caracteristicasEspeciales = $_POST['caracteristicasEspeciales'] ?? "";

try {
    if (isset($_POST['guardarPelicula'])) {

        $caracteristicasEspeciales = implode(",", $caracteristicasEspeciales); //array a cadena de texto

        if (empty($titulo)) {
            throw new Exception("El campo titulo no puede estar vacío");
        }

        if (empty($descripcion)) {
            throw new Exception("El campo descripción no puede estar vacío");
        }

        if (empty($anoLanzamiento)) {
            throw new Exception("El campo año de lanzamiento no puede estar vacío");
        }

        if (empty($idioma)) {
            throw new Exception("El campo idioma no puede estar vacío");
        }

        if (empty($idioma2)) {
            throw new Exception("El campo idioma original no puede estar vacío");
        }

        if (empty($rentaDuracion)) {
            throw new Exception("El campo duración de renta no puede estar vacío");
        }

        if (empty($tasaArrendamiento)) {
            throw new Exception("El campo tasa de arrendamiento no puede estar vacío");
        }

        if (empty($tamano)) {
            throw new Exception("El campo tamaño no puede estar vacío");
        }

        if (empty($tasaArrendamiento)) {
            throw new Exception("El campo tasa arrendamiento no puede estar vacío");
        }

        if (empty($costoReemplazo)) {
            throw new Exception("El campo costo de reemplazo no puede estar vacío");
        }

        if (empty($clasificacion)) {
            throw new Exception("El campo clasificación no puede estar vacío");
        }

        $datos = compact('titulo', 'descripcion', 'anoLanzamiento', 'idioma', 'idioma2', 'rentaDuracion', 'tasaArrendamiento', 'tamano', 'tasaArrendamiento', 'costoReemplazo', 'clasificacion', 'caracteristicasEspeciales');

        //Insertar los datos
        $insertadoPelicula = insertarPelicula($conexion, $datos);
        $_SESSION['mensaje'] = "Datos insertados correctamente...";

        if (!$insertadoPelicula) {
            throw new Exception("Ocurrió un error al insertar los datos de la pelicu;a...");
        }

        redireccionar("pelicula.php");
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}

$idiomas = obtenerIdioma($conexion);
$infoPeliculas = obtenerInfoPeliculas($conexion);

include_once "vistas/vista_pelicula.php";