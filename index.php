<!--Importamos el codigo para el header de la pagina-->

<?php require('./layout/header.php') ?>

<div class="body_login">

    <!--Formulario para el inicio de session de los usuarios ya regstrados-->
    <form action="./controller/login.php" method="post">
        <div class="container">

            <div class="head">
                <img src="img/logo.png" alt="" srcset="">
                <h2>Bienvenidos</h2>
            </div>




            <!-- estrutura para campo de texto -->

            <div class="textfield">

                <div class="field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="user" id="user" placeholder="Usuarios">
                </div>
                <div id="err" style="display: none">Datos IN</div>

                <div class="field">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña">
                    <i class="fa-solid fa-eye" onclick="mostrar()" id="ver"></i>
                    <i class="fa-solid fa-eye-low-vision" onclick="ocultar()" id="ocultar"></i>
                </div>

            </div>

            <div class="btn">
                <input type="submit" value="ENTRAR" name="btn_login">
            </div>

        </div>

    </form>

</div>

<!--Importamos el codigo para el footer o pide pagina-->
<?php require('./layout/footer.php') ?>