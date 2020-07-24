<?php
require_once "funciones/helpers.php";

$nombrePagina = "Películas";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_pelicula.php";

$titulo = $_POST['titulo'] ?? "";
$descripcion = $_POST['descripcion'] ?? "";
$anoLanzamiento = $_POST['anoLanzamiento'] ?? "";
$idioma = $_POST['idioma'] ?? "";
$idioma2 = $_POST['idioma2'] ?? "";
$rentaDuracion= $_POST['rentaDuracion'] ?? "";
$tasaArrendamiento= $_POST['tasaArrendamiento'] ?? "";
$tamano= $_POST['tamano'] ?? "";
$costoReemplazo= $_POST['costoReemplazo'] ?? "";
$clasificacion= $_POST['clasificacion'] ?? "";
$caracteristicasEspeciales= $_POST['caracteristicasEspeciales'] ?? "";


try {
    if (isset($_POST['guardarPelicula'])) {
        //codigo para guardar en la
        //
        //
        $caracteristicasEspeciales= implode(",", $caracteristicasEspeciales);


        if(empty( $titulo  )){
            throw new Exception("El campo titulo no puede estar vacio");
        }

        if(empty( $descripcion  )){
            throw new Exception("El campo descripcion no puede estar vacio");
        }
        if(empty( $anoLanzamiento  )){
            throw new Exception("El campo año de lanzamiento no puede estar vacio");
        }
        if(empty( $idioma  )){
            throw new Exception("El campo idioma no puede estar vacio");
        }
        if(empty( $idioma2  )){
            throw new Exception("El campo idioma original no puede estar vacio");
        }
        if(empty( $rentaDuracion  )){
            throw new Exception("El campo duracion de renta no puede estar vacio");
        }
        if(empty( $tasaArrendamiento  )){
            throw new Exception("El campo tasa de arrendamiento no puede estar vacio");
        }
        if(empty( $tamano  )){
            throw new Exception("El campo tamaño no puede estar vacio");
        }
        if(empty( $tasaArrendamiento  )){
            throw new Exception("El campo tasa arrendamiento no puede estar vacio");
        }

        if(empty( $costoReemplazo  )){
            throw new Exception("El campo costo de reemplazo no puede estar vacio");
        }

        if(empty( $clasificacion  )){
            throw new Exception("El campo clasificacion no puede estar vacio");
        }
        if(empty( $caracteristicasEspeciales  )){
           // throw new Exception("El campo caracteristicas especiales no puede estar vacio");
        }



        $datos = compact('titulo','descripcion','anoLanzamiento','idioma','idioma2','rentaDuracion','tasaArrendamiento','tamano','tasaArrendamiento','costoReemplazo','clasificacion','caracteristicasEspeciales');
        //Insertar los datos
        $insertadoPelicula = insertarPelicula($conexion, $datos);
        $mensaje = "Datos insertados correctamente...";
        if (!$insertadoPelicula) {
            throw new Exception("Ocurrió un error al insertar los datos de la pelicu;a...");
        }
        //redireccionar la pagina

        redireccionar("pelicula.php");

    }
} catch (Exception $e) {
    $error = $e->getMessage();
}



$idiomas = obtenerIdioma($conexion);
$infoPeliculas = obtenerInfoPeliculas($conexion);

include_once "vistas/vista_pelicula.php";