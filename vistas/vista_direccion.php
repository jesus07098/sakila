<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Barra superior -->

<!-- Contenido -->

<div class="">
    <div class="row">
        <?php include_once "componentes/comp_parte_menu.php" ?>

        <div class="">

            <div class="col-md-9 offset-md-2">
                <h3 id="espacio-titulo"> <?php echo $nombrePagina; ?> </h3>

                <hr>
                <div class="row">
                    <div class="col-md-5">
                        <form action="direccion.php" method="post">
                            <div class="mb-3">
                                <label for="direccion">Dirección: </label>
                                <input type="text" name="direccion" id="direccion" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="direccion2">Direccion 2: </label>
                                <input type="text" name="direccion2" id="direccion2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="distrito">Distrito: </label>
                                <input type="text" name="distrito" id="distrito" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="pb-3" for="ciudad">Ciudad: </label>
                                <select name="ciudad" id="ciudad" class="form-select">
                                    <option value="" selected disabled>Seleccione una ciudad</option>
                                    <?php
                                    foreach ($ciudades as $ciudad)
                                        echo "<option value=\"{$ciudad['city_id']} \">{$ciudad['city']}</option>";
                                    ?>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="codigoPostal">Código Postal: </label>
                                <input type="number" name="codigoPostal" id="codigoPostal" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="telefono">Teléfono: </label>
                                <input type="tel" name="telefono" id="telefono" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="guardarDireccion" class="btn teal green accent-4">
                                    Guardar
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
                        <table class="table centered">
                            <thead>
                            <th scope="col">ID Dirección</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Dirección 2</th>
                            <th scope="col">Distrito</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Código Postal</th>
                            <th scope="col">Teléfono</th>

                            </thead>
                            <tbody>
                            <?php
                            foreach ($infoDirecciones as $infoDireccion) {
                                echo "<tr>
                            <th scope=\"row\">{$infoDireccion['address_id']}</th>
                           <td>{$infoDireccion['address']}</td>
                           <td>{$infoDireccion['address2']}</td>
                           <td>{$infoDireccion['district']}</td>
                           <td>{$infoDireccion['city']}</td>
                           <td>{$infoDireccion['postal_code']}</td>
                           <td>{$infoDireccion['phone']}</td>
                         
                       </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>


</body>
</html>