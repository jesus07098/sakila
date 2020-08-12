<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Contenido -->
<div class="">
    <div class="row">
        <?php include_once "componentes/comp_parte_menu.php" ?>
        <div class="col-md-7 offset-md-2">

            <h3 id="espacio-titulo"> <?php echo $nombrePagina; ?> </h3>
            <hr>
            <div class="row">
                <div class="col-md-5">
                    <form action="pais.php" method="post">
                        <input type="hidden" name="idPais" value="<?= $idPais ?>">

                        <!--Inputs Formulario-->
                        <div class="mb-3">
                            <label for="pais">País: </label>
                            <input type="text" name="nombrePais" id="nombrePais" class="form-control"
                                   value="<?= $nombrePais ?>"  placeholder="Digite el país">
                        </div>

                        <!--Boton Guardar-->
                        <div class="mb-3">
                            <button type="submit" name="guardarPais" class="btn green accent-4">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            include_once 'componentes/comp_partes_mensaje.php';
            ?>

            <div class="row">
                <div class="col-md-10">
                    <hr>
                    <form action="" method="post">
                        <table class="table centered">
                            <thead>
                            <th scope="col">ID </th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Acciones</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($paises as $pais) {
                                echo "<tr>
                                        <th scope=\"row\">{$pais['country_id']}</th>
                                        <td>{$pais['country']}</td>
                                         <td>
                                           <button type='submit' class='btn btn-primary btn-sm d50000 red accent-4' title='Eliminar pais'  name='eliminarPais'  value='{$pais['country_id']}'><i class='fas fa-trash'></i></button>
                                           <button type='submit' class='btn btn-sm btn-danger ' title='Editar pais'  name='editarPais' value='{$pais['country_id']}'><i class='fas fa-pen'></i></button>
                                         </td>
                                     </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'componentes/comp_foot.php' ?>
</body>
</html>