<?php

function incluir_vista($nombre)
{
    include_once "vistas/vista_{$nombre}.php";
}

function imprimirArray($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

//redireccionar a una pagina

function redireccionar($ruta)
{
    header("Location: {$ruta}", true, 303);
}

//mantener los mensajes al recargar la pagina por los btn

if (session_status() == 1) { //si la sesion esta disponible, pero no existe.
    session_start();
}

if (session_status() === 2) { //si session_status es igual a 2 la sesion esta activa
    $mensaje = $_SESSION['mensaje'] ?? "";

    if (isset($_SESSION['mensaje'])) {
        unset($_SESSION['mensaje']);
    }
}