<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Contenido -->
<div class="">
    <div class="row">
        <?php include_once "componentes/comp_parte_menu.php" ?>

        <div class="col-md-9 offset-md-2">
            <h4 id="espacio-titulo" class="offset-md-5"> <?php echo $nombrePagina; ?> </h4>

            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <div class="card shadow-lg p-3 mb-5 bg-white ">
                        <div class="card-header bg-dark text-white">Formulario de <?php echo $nombrePagina; ?></div>

                        <form action="tienda.php" method="post">

                            <div class="mb-3">
                                <label for="gerente">Gerente personal: </label>
                                <select name="gerente" id="gerente" class="form-select">
                                    <option value="" selected disabled="disabled">Seleccione un gerente:
                                    </option>
                                    <?php
                                    foreach ($gerentes as $gerente)
                                        echo "<option value=\"{$gerente['staff_id']} \">{$gerente['first_name']} {$gerente['last_name']}</option>";
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="direccion">Dirección: </label>
                                <select name="direccion" id="direccion" class="form-select">
                                    <option value="" selected disabled>Listado de direcciones</option>
                                    <?php
                                    foreach ($direcciones as $direccion) {
                                        echo " <option value=\"{$direccion['address_id']}\">{$direccion['address']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarTienda" class="btn teal green accent-4">Guardar
                                </button>
                            </div>
                        </form>

                    </div>
                    <?php include_once 'componentes/comp_partes_mensaje.php'; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table centered">
                        <thead>
                                <th scope="col">ID Tienda</th>
                                <th scope="col">Gerente Tienda</th>
                                <th scope="col">Direccion Tienda</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($infoTiendas as $infoTienda) {
                            echo "<tr>
                                       <th scope=\"row\">{$infoTienda['store_id']}</th>
                                       <td>{$infoTienda['first_name']}</td>
                                       <td>{$infoTienda['address']}</td>
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



