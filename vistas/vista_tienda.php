<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Contenido -->
<div class="">
    <div class="row">
        <?php include_once "componentes/comp_parte_menu.php" ?>
        <div class="col-md-9 offset-md-2">
            <h3 id="espacio-titulo"> <?php echo $nombrePagina; ?> </h3>
            <hr>
            <div class="row">
                <div class="col-md-5">
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



