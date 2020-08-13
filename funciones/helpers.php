<?php

if (session_status() == 1) {
    session_start();
}

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

function redireccionar($ruta)
{
    header("Location: {$ruta}", true, 303);
}

if (session_status() === 2) {
    $mensaje = $_SESSION['mensaje'] ?? "";

    if (isset($_SESSION['mensaje'])) {
        unset($_SESSION['mensaje']);
    }
}