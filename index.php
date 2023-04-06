<?php require('./layout/header.php') ?>

<div class="body_login">


    <form action="./controller/login.php" method="post">
        <div class="container">
            <div class="head">
                <img src="img/AMIRSA MISION VERDE LOGO.png" alt="" srcset="">

                <h2>Bienvenidos</h2>
               
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
                <input type="submit" value="ENTRAR" name="btn_login" >
            </div>
        </div>
    </form>

</div>

<?php require('./layout/footer.php') ?>