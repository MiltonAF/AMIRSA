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
                <tr>
                    <td>19698594</td>
                    <td>Maria Anders fonseca mario</td>
                    <td>Germany@gmail.com</td>
                    <td>3245355353</td>
                    <td>Cr23 #23-34</td>
                    <td>Administrativo</td>
                    <td>Bien</td>
                    <td>
                        <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    </div>

    <section class="modal ">
        <div class="modal__container">
            <img src="images/modal.svg" class="modal__img">
            <h2 class="modal__title">¡Bienvenido al sitio!</h2>
            <p class="modal__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nobis nisi
                quibusdam doloremque expedita quae ipsam accusamus quisquam quas, culpa tempora. Veniam consectetur
                deleniti maxime.</p>
            <a href="#" class="modal__close">Cerrar Modal</a>
        </div>
    </section>







</main>

<?php include('layout/footer.php'); ?>