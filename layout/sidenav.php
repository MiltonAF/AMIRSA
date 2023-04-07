<header id="sidenav" class="sidenav">
    <div class="logo">
        <img src="img/AMIRSA MISION VERDE LOGO.png" alt="" srcset="">
        <p>AMIRSA</p>
    </div>


    <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Panel</a>
    <?php if($rol['nombre'] == "cliente") {?>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Usuarios</a>'
    <?php }?>

    <a href="#" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Ventas</a>
    <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Compras</a>
    <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Materiales</a>
    <a href="#" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Vehiculos</a>
    <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a>
</header>