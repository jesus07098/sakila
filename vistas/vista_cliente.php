<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Barra superior -->

<!-- Contenido -->


<div class="row">
    <?php include_once "componentes/comp_parte_menu.php" ?>

    <div class="col-md-10 offset-md-2">
        <h3 id="espacio-titulo"> <?php echo $nombrePagina; ?> </h3>
        <hr>


        <div class="col-md-5">
            <form action="cliente.php" method="post">
                <div class="mb-3">
                    <label for="tienda">Tienda: </label>
                    <select name="tienda" id="tienda" class="form-select">
                        <option value="" selected disabled>Seleccione el número de tienda:</option>
                        <?php

                        foreach ($tiendas as $tienda) {
                            echo " <option value=\"{$tienda['store_id']}\">{$tienda['store_id']}</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                           placeholder="Digite el nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido">Apellido: </label>
                    <input type="text" name="apellido" id="apellido" class="form-control"
                           placeholder="Digite el apellido">
                </div>
                <div class="mb-3">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" class="form-control"
                           placeholder="Digite el email">
                </div>
                <div class="mb-3">
                    <label for="direccion">Dirección: </label>
                    <select name="direccion" id="direccion" class="form-select">
                        <option value="" selected disabled>Seleccione una dirección:</option>
                        <?php

                        foreach ($direcciones as $direccion) {
                            echo " <option value=\"{$direccion['address_id']}\">{$direccion['address']}</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="activo">
                        <input type="checkbox" name="activo" id="activo" class="filled-in" checked="checked"/>
                        <span>Activo</span>
                    </label>

                </div>

                <div class="mb-3 pt-4">
                    <button type="submit" name="guardarCliente" class="btn teal green accent-4">Guardar</button>
                </div>
            </form>
            <?php
            include_once 'componentes/comp_partes_mensaje.php';
            ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <hr>
            <table class="table centered">
                <thead>
                <th scope="col">ID Cliente</th>
                <th scope="col">ID Tienda</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Dirección</th>
                <th scope="col">Activo</th>
                </thead>
                <tbody>
                <?php
                foreach ($infoClientes as $infoCliente) {
                    echo "<tr>
                            <th scope=\"row\">{$infoCliente['customer_id']}</th>
                           <td>{$infoCliente['store_id']}</td>
                           <td>{$infoCliente['first_name']}</td>
                            <td>{$infoCliente['last_name']}</td>
                             <td>{$infoCliente['email']}</td>
                              <td>{$infoCliente['address']}</td>
                               <td>{$infoCliente['active']}</td>
                       </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>