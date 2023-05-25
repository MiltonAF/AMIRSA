<?php


include('layout/session.php');
include('layout/header.php');
include('layout/sidenav.php');



?>


<main>

    <div class="box">
        <h2>Usarios</h2>
    </div>

    <div class="box">
        <div class="cont-box">
            <div class="head-box">
                <h2>Lista de usuarios</h2>
                <a href="#" class="hero__cta">Nuevo Usuario</a>


            </div>
            <br />
            <table>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre Completo</th>
                    <th>E-mail</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Cargo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
                <?php
                $sql = "SELECT * FROM empleados";
                $consult = mysqli_query($conn, $sql);


                while ($array = mysqli_fetch_array($consult)) {

                    ?>

                    <tr>
                        <td>
                            <?php echo ("$array[cedula]"); ?>
                        </td>
                        <td>
                            <?php echo ("$array[nombre] $array[apellido]"); ?>
                        </td>
                        <td>
                            <?php echo ("$array[e_mail]"); ?>
                        </td>
                        <td>
                            <?php echo ("$array[telefono]"); ?>
                        </td>
                        <td>
                            <?php echo ("$array[direccion]"); ?>
                        </td>
                        <td>
                            <?php
                            $id_cargo = $array["cargo_id"];
                            $sql = "SELECT * FROM cargo WHERE id = $id_cargo";
                            $consult = mysqli_query($conn, $sql);
                            $cargo = mysqli_fetch_array($consult);
                            echo ("$cargo[nombre]")
                                ?>
                        </td>

                        <td>
                            <?php echo ("$array[estado]"); ?>
                        </td>


                        <td>
                            <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>


            </table>
        </div>
    </div>
    </div>

    <section class="modal ">
        <div class="modal__container">

            <h2 class="modal__title">¡Nuevo Usuario!</h2>
            <form action="" method="post">

                <div class="container">

                    <!-- estrutura para campo de texto -->

                    <div class="textfield">

                        <div class="field">

                            <input type="number" name="c.c" id="c.c" placeholder="Cedula">
                        </div>

                        <div class="field">
                            <input type="text" name="name" id="name" placeholder="Nombres">
                        </div>

                        <div class="field">
                            <input type="text" name="surname" id="surname" placeholder="Apellidos">
                        </div>

                        <div class="field">
                            <input type="text" name="email" id="email" placeholder="Correo electronico">
                        </div>

                        <div class="field">
                            <input type="text" name="phone" id="phone" placeholder="Telefono">
                        </div>

                        <div class="field">
                            <input type="text" name="address" id="address" placeholder="Dirrecion">
                        </div>

                        <div class="field">
                            <select name="cargo" id="cargo">
                                <option value="">
                                    Seleccionar el Cargo</option>
                                <?php
                                $sql2 = "SELECT * FROM cargo";
                                $consult2 = mysqli_query($conn, $sql2);


                                foreach ($consult2 as $option): ?>

                                    <option value="<?php echo ("$option[nombre]") ?>"><?php echo ("$option[nombre]") ?>
                                    </option>

                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="field">
                            <select name="status" id="status">


                                <option value="Laborando">Laborando </option>
                                <option value="Suspendido">Suspendido </option>
                                <option value="Enfermo">Enfermo </option>


                            </select>
                        </div>







                    </div>

                    <div class="btn">
                        <input type="submit" value="ENTRAR" name="btn_login">
                        <a href="#" class="modal__close">Cerrar Modal</a>
                    </div>

                </div>

            </form>

        </div>
    </section>







</main>

<?php include('layout/footer.php'); ?>