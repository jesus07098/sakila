<?php

$paginasMenu = [
    "index" => ['Inicio', 'fas fa-home'],
    'actor' => ['Actor', 'fas fa-user'],
    'direccion' => ['Dirección', 'fas fa-map-marker-alt'],
    'ciudad' => ['Ciudad', 'fas fa-city'],
    'pais' => ['País', 'fas fa-flag'],
    'cliente' => ['Clientes', 'fas fa-user-tag'],
    'pelicula' => ['Películas', 'fas fa-video'],
    'categoria' => ['Categoría', 'fas fa-tag'],
    'tienda' => ['Tienda', 'fas fa-store'],
    'idioma' => ['Idioma', 'fas fa-language'],
    'personal' => ['Personal', 'fas fa-user-friends']];

$url = $_SERVER['REQUEST_URI'];

foreach ($paginasMenu as $nombreArchivo => $item) {
    $paginaActual = '';

    if (strpos($url, $nombreArchivo)) {
        $paginaActual = 'activo';
    }
    $icono = $item[1];
    $textoPagina = $item[0];
    echo " <a class=\"nav-link  {$paginaActual} \" href=\"{$nombreArchivo}.php\">  <i class=\"{$icono}\"></i>  <span> {$textoPagina}</span></a>";
}
?>

