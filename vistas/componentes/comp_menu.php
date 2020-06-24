
<?php

$paginasMenu=[
     "index"=>   ['Inicio', 'fas fa-home'],
    'actor' => ['Actor', 'fas fa-user'],
 'direccion' =>  ['Dirección', 'fas fa-map-marker-alt'],
  'ciudad' =>  ['Ciudad', 'fas fa-city'],
  'pais' =>  ['País', 'fas fa-flag'],
  'cliente'=>  ['Clientes', 'fas fa-user-tag'],
  'pelicula'=>  ['Películas', 'fas fa-video']];

foreach($paginasMenu as $nombreArchivo => $item){
    $icono= $item[1];
    $textoPagina=$item[0];
    echo  "<a class=\"nav-link\" href=\"{$nombreArchivo}.php\">  <i class=\"{$icono}\"></i> {$textoPagina}</a>";
}
?>


