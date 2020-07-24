<?php
require_once "funciones/helpers.php";
require_once "modelos/modelo_actor.php";

$nombrePagina = "Actores";


$nombreActor = $_POST['nombreActor'] ?? "";
$apellidoActor = $_POST['apellidoActor'] ?? "";

//Aseguranos de que el usuario ha hecho click en el boton

try {
    if (isset($_POST['guardarActor'])) {
        //codigo para guardar en la BD


        if (empty($nombreActor)) {
            throw new Exception("El nombre del actor está vacio");
        }
        if (empty($apellidoActor)) {
            throw new Exception("El apellido del actor está vacio");
        }

        $datos = compact('nombreActor', 'apellidoActor');


        //Insertar los datos
        $actorInsertado = insertarActores($conexion, $datos);


        if (!$actorInsertado) {
            throw new Exception("Ocurrió un error al insertar los datos del actor");
        }
        //redireccionar la pagina
        redireccionar('actor.php');


    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


$actores = obtenerActores($conexion);

include_once "vistas/vista_actor.php";


