<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $nombrePagina; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
 <p>Bienvenidos a la pagina <?php echo $nombrePagina; ?></p>
 <ul class="nav">
     <li class="nav-item">
         <a class="nav-link active" href="#">Inicio</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="actor.php">Actor</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="direccion.php">Dirección</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="ciudad.php">Ciudad</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="pais.php">Pais</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="cliente.php">Clientes</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="pelicula.php">Peliculas</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="idioma.php">Idioma</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="personal.php">Personal</a>
     </li>
     <li class="nav-item">
         <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
     </li>
 </ul>
</body>
</html>