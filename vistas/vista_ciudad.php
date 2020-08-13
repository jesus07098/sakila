<?php
include_once "componentes/comp_head.php";

?>
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
                    <form action="ciudad.php" method="post">
                        <div class="mb-3">

                            <input type="hidden" name="idCiudad" value="<?= $idCiudad ?>">

                            <label for="nombreCiudad">Ciudad: </label>

                            <input type="text" name="nombreCiudad" id="nombreCiudad" class="form-control"
                                   value="<?= $nombreCiudad ?>"    placeholder="Digite la ciudad">
                        </div>

                        <div class="mb-3">
                            <label for="pais">País: </label>
                            <select name="pais" class="form-select" id="pais" >
                                <option  disabled>Seleccione un país:
                                </option>
                                <?php
                                foreach ($paises as $pais) {
                                    if ($pais['country_id'] == $idPais) {
                                        $seleccionado = "selected";
                                    } else {
                                        $seleccionado = "";
                                    }
                                    echo "<option value=\"{$pais['country_id']}\" {$seleccionado}>{$pais['country']}</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardarCiudad" class="btn green accent-4">Guardar
                            </button>
                        </div>

                    </form>

                    <?php
                        include_once 'componentes/comp_partes_mensaje.php';
                    ?>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                    <table class="table centered ">
                        <thead>
                        <th scope="col">ID Ciudad</th>
                        <th scope="col">Nombre Ciudad</th>
                        <th scope="col">Nombre País</th>
                        <th scope="col">Acciones</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($ciudades as $ciudad) {
                            echo "<tr>
                            <th scope=\"row\">{$ciudad['city_id']}</th>
                           <td>{$ciudad['city']}</td>
                           <td>{$ciudad['country']}</td>
                           <td>
                            <button type='submit' class='btn btn-estilo btn-primary btn-sm d50000 red accent-4' title='Eliminar ciudad'  name='eliminarCiudad'  value='{$ciudad['city_id']}'><i class='fas fa-trash i-acciones'></i></button>
                           <button type='submit' class='btn btn-estilo btn-sm btn-danger ' title='Editar ciudad'  name='editarCiudad' value='{$ciudad['city_id']}'><i class='fas fa-pen i-acciones'></i></button>
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