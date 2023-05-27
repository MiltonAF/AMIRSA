<!--Barra de navegacion lateral-->
<div class="sidebar">
  <!--Logo e informacion de la empresa-->
  <div class="logo-details">
    <img src="img/logo.png" alt="" srcset="">
    <div class="logo_name">Amirsa</div>
  </div>

  <!--item de navegacion-->
  <ul class="nav-list">

    <li>
      <a href="#">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Panel Administrativo</span>

      </a>
    </li>

    <?php
    if ($vec['role'] == "Administrador") { ?>
      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="links_name">Materiales</span>
        </a>
      </li>
    <?php } ?>



    <li>
      <a href="#">
        <i class="fa-solid fa-user"></i>
        <span class="links_name">Ventas</span>
      </a>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Compras</span>
      </a>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Vehiculo</span>
      </a>

    </li>

    <li>
      <a href="users.php">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Usuarios</span>
      </a>

    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Rutas</span>
      </a>

    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Reportes</span>
      </a>

    </li>

    <li>
      <a href="#">
        <i class='bx bx-folder'></i>
        <span class="links_name">Configuracion</span>
      </a>

    </li>



    <li class="profile">
      <div class="profile-details">

        <div class="name_job">
          <div class="name">
            <?php echo ("$vec[name] $vec[surname]"); ?>
          </div>
          <!--Cargo del empleado-->
          <div class="job">
            <?php echo ("$vec[role]"); ?>
          </div>
        </div>
      </div>

      <a href="controller/singoff.php" id="log_out">
        <i class="fa-solid fa-right-from-bracket fa-flip-horizontal"></i>
      </a>


    </li>

  </ul>
</div>