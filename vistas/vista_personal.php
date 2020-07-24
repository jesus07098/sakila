<?php include_once "componentes/comp_head.php" ?>
<body>

<!-- Barra superior -->

<!-- Contenido -->
<div class="row">
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="" id="sidebar">
        <header>Sakila</header>
        <?php include_once "componentes/comp_menu.php" ?>
    </div>
    <section class="cuerpo mt-2">
        <div class="container">
            <div class="col-md-9">
                <h3 id="espacio-titulo"> <?php echo $nombrePagina; ?> </h3>
                <hr>
                <div class="row">
                    <div class="col-md-5">
                        <form action="personal.php" method="post">
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
                                <label for="direccion">Dirección: </label>
                                <select name="direccion" id="direccion" class="form-select">
                                    <option value="" selected disabled>Seleccione una dirección</option>
                                    <?php

                                    foreach ($direcciones as $direccion) {
                                        echo " <option value=\"{$direccion['address_id']}\">{$direccion['address']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="imagen">
                                <input type="file" class="custom-file-input" id="imagen">
                                <label class="custom-file-label" for="imagen">Choose file</label>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email: </label>
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="Ej.: nombre@ejemplo.com">
                            </div>
                            <div class="mb-4">
                                <label for="idTienda">Tienda: </label>
                                <select name="idTienda" class="form-select">
                                    <option value="" selected disabled>Seleccione el número de tienda:</option>
                                    <?php

                                    foreach ($tiendas as $tienda) {
                                        echo " <option value=\"{$tienda['store_id']}\">{$tienda['store_id']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="activo">
                                    <input type="checkbox" name="activo" id="activo" class="filled-in" checked="checked" />
                                    <span>Activo</span>
                                </label>

                            </div>

                            <div class="mb-3">
                                <label for="username">Nombre de Usuario: </label>
                                <input type="text" name="username" id="username" class="form-control"
                                       placeholder="Digite el Nombre de Usuario">
                            </div>
                            <div class="mb-3">
                                <label for="password">Contraseña: </label>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="Digite la contraseña">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="guardarPersonal" class="btn teal green accent-4">Guardar
                                </button>
                            </div>

                        </form>
                        <?php
                        if (isset($error)) {
                            echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                  {$error}
                                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                  </button>
                                </div>";
                        }
                        if (isset($actorInsertado)) {
                            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                             Datos insertados correctamente...
                                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                  </button>
                                </div>";

                        }
                        ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <th scope="col">ID Personal</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tienda</th>
                            <th scope="col">Activo</th>
                            <th scope="col">Nombre Usuario</th>
                            <th scope="col">Contraseña</th>

                            </thead>
                            <tbody>
                            <?php
                            foreach ($infoPersonales as $infoPersonal) {
                                echo "<tr>
                            <th scope=\"row\">{$infoPersonal['staff_id']}</th>
                           <td>{$infoPersonal['first_name']}</td>
                           <td>{$infoPersonal['last_name']}</td>
                           <td>{$infoPersonal['address']}</td>
                           <td>{$infoPersonal['email']}</td>
                            <td>{$infoPersonal['store_id']}</td>
                              <td>{$infoPersonal['active']}</td>
                               <td>{$infoPersonal['username']}</td>
                                   <td>{$infoPersonal['password']}</td>
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
</div>


</body>
</html>