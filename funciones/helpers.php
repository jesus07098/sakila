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

function redireccionar($ruta)
{
    header("Location: {$ruta}", true, 303);
}