<div class="sidebar">
  <div class="logo-details">
    <img src="img/logo.png" alt="" srcset="">
    <div class="logo_name">Amirsa</div>
    <i class='bx bx-menu' id="btn_menu"></i>
  </div>
  <ul class="nav-list">

    <li>
      <a href="#">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Panel Administrativo</span>
      </a>
      <span class="tooltip">Panel Administrativo</span>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-user'></i>
        <span class="links_name">Materiales</span>
      </a>
      <span class="tooltip">Materiales</span>
    </li>

    <li>
      <a href="#">
        <i class="fa-solid fa-user"></i>
        <span class="links_name">Ventas</span>
      </a>
      <span class="tooltip">Ventas</span>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Compras</span>
      </a>
      <span class="tooltip">Compras</span>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Vehiculo</span>
      </a>
      <span class="tooltip">Vehiculo</span>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Usuarios</span>
      </a>
      <span class="tooltip">Usuarios</span>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Rutas</span>
      </a>
      <span class="tooltip">Rutas</span>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Reportes</span>
      </a>
      <span class="tooltip">Reportes</span>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-folder'></i>
        <span class="links_name">Configuracion</span>
      </a>
      <span class="tooltip">Configuracion</span>
    </li>



    <li class="profile">
      <div class="profile-details">

        <div class="name_job">
          <div class="name">
            <?php echo ("$vec[nombre] $vec[apellido]"); ?>
          </div>
          <div class="job">
            <?php echo ("$rol[nombre]"); ?>
          </div>
        </div>
      </div>

      <a href="controller/singoff.php" id="log_out"> <i class='bx bx-log-out'></i></a>


    </li>

  </ul>
</div>