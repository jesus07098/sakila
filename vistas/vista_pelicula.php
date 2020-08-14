<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Contenido -->
<div class="">
    <div class="row">
        <?php include_once "componentes/comp_parte_menu.php" ?>
        <div class="col-md-10 ">
            <h4 id="espacio-titulo" class="offset-md-5"> <?php echo $nombrePagina; ?> </h4>
            <div class="row ">
                <div class="col-md-12">
                    <hr>
                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-header bg-dark text-white">Formulario de <?php echo $nombrePagina; ?></div>
                        <form action="pelicula.php" method="post">

                            <div class="mb-3 ">
                                <label for="titulo">Título: </label>
                                <input value="<?= $titulo ?>" type="text" name="titulo" id="titulo"
                                       class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="Descripcion">Descripción</label>
                                <input value="<?= $descripcion ?>" type="text" name="descripcion" id="descripcion"
                                       class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="anoLanzamiento" class="form-label">Año de Lanzamiento</label>
                                <input class="form-control" name="anoLanzamiento" list="listadoAnios"
                                       id="anoLanzamiento" placeholder="Digite el ano de Lanzamiento...">
                                <datalist id="listadoAnios">
                                    <?php
                                    for ($year = date("Y"); $year >= 1900; $year--)
                                        echo "<option value='{$year}'>"

                                    ?>
                                </datalist>
                            </div>

                            <div class="mb-3">
                                <label for="idioma">Idioma: </label>
                                <select name="idioma" class="form-select">
                                    <option value="" selected disabled>Seleccione un idioma:</option>
                                    <?php
                                    foreach ($idiomas as $idioma) {
                                        echo "<option value=\"{$idioma['language_id']}\" >{$idioma['name']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="idioma2">Idioma original: </label>
                                <select name="idioma2" id="idioma2" class="form-select">
                                    <option value="" selected disabled>Seleccione un idioma:</option>
                                    <?php
                                    foreach ($idiomas as $idioma) {
                                        echo "<option value=\"{$idioma['language_id']}\" >{$idioma['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="rentaDuracion">Duración de renta: </label>
                                <input value="<?= $rentaDuracion ?>" type="text" name="rentaDuracion"
                                       id="rentaDuracion" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="tasaArrendamiento">Tasa de arrendamiento: </label>
                                <input value="<?= $tasaArrendamiento ?>" type="tel" name="tasaArrendamiento"
                                       id="tasaArrendamiento"
                                       class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="tamano">Tamaño: </label>
                                <input value="<?= $tamano ?>" type="text" name="tamano" id="tamano"
                                       class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="costoReemplazo">Costo de reemplazo: </label>
                                <input value="<?= $costoReemplazo ?>" type="text" name="costoReemplazo"
                                       id="costoReemplazo" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="clasificacion">Clasificacion: </label>
                                <select name="clasificacion" id="clasificacion" class="form-select">
                                    <option value="" disabled selected>Elige una clasificación</option>
                                    <?php
                                    $ratings = ['G', 'PG', 'PG-13', 'R', 'NC-17'];
                                    foreach ($ratings as $rating) {
                                        echo "<option value=\"{$rating}\" >{$rating}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="caracteristicasEspeciales">Característica Especial: </label>

                                <select name="caracteristicasEspeciales[]" id="caracteristicasEspeciales"
                                        class="form-select" multiple>
                                    <option value="" disabled selected>Elige una Caracteristica Especial</option>
                                            <?php
                                            $features = ['Trailers', 'Commentaries', 'Deleted Scenes', 'Behind the Scenes'];
                                            foreach ($features as $feature) {
                                                echo "<option value=\"{$feature}\" >{$feature}</option>";
                                            }
                                            ?>
                                </select>

                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarPelicula" class="btn green accent-4">Guardar
                                </button>
                            </div>
                        </form>

                    </div>
                    <?php include_once 'componentes/comp_partes_mensaje.php'; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <table class="table">
                        <thead>
                            <th scope="col">ID película</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descripción 2</th>
                            <th scope="col">Año lanzamiento</th>
                            <th scope="col">Idioma principal</th>
                            <th scope="col">Otro idioma</th>
                            <th scope="col">Duración de alquiler</th>
                            <th scope="col">Tasa de arrendamiento</th>
                            <th scope="col">Tamaño</th>
                            <th scope="col">Costo de reemplazo</th>
                            <th scope="col">Clasificación</th>
                            <th scope="col">Características especiales</th>
                        </thead>

                        <tbody>
                        <?php
                        foreach ($infoPeliculas as $infoPelicula) {
                            echo "<tr>
                                       <th scope=\"row\">{$infoPelicula['film_id']}</th>
                                       <td>{$infoPelicula['title']}</td>
                                       <td>{$infoPelicula['description']}</td>
                                       <td>{$infoPelicula['release_year']}</td>
                                       <td>{$infoPelicula['idioma_oficial']}</td>
                                       <td>{$infoPelicula['idioma_sec']}</td>
                                       <td>{$infoPelicula['rental_duration']}</td>
                                       <td>{$infoPelicula['rental_rate']}</td>
                                       <td>{$infoPelicula['length']}</td>
                                       <td>{$infoPelicula['replacement_cost']}</td>
                                       <td>{$infoPelicula['rating']}</td>
                                       <td>{$infoPelicula['special_features']}</td>    
                             </tr>";
                        }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>