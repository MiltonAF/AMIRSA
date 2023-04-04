<?php require('./layout/header.php') ?>

<div class="body_login">


    <form action="" method="post">
        <div class="contenedor">
            <div class="encabezado">
                <img src="img/AMIRSA MISION VERDE LOGO.png" alt="" srcset="">

                <h2>Bienvenidos</h2>
                <?php include('./model/conexion.php') ?>
                <?php include('./controller/c_login.php') ?>

            </div>
            <div class="textfield">

                <div class="field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="user" id="user" placeholder="Usuarios">
                </div>

                <div class="field">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña">
                    <i class="fa-solid fa-eye" onclick="mostrar()" id="ver"></i>
                    <i class="fa-solid fa-eye-low-vision" onclick="ocultar()" id="ocultar"></i>
                </div>
            </div>

            <div class="btn">
                <a href="dashboard.html">aqui</a>
                <input type="submit" value="ENTRAR" name="btn_login" placeholder="ENTRAR">
            </div>
        </div>
    </form>

</div>

<?php require('./layout/footer.php') ?>