

<nav class="navbar navbar-expand-sm  fixed-top " style="background-color:#ffffff">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="http://localhost/software/img/logo.png" alt="logo" class="rounded-pill" style="width:15%; min-width:100px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#colNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--Menu-->
    <div id="colNav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto me-auto ">
        <li class="navbar-item">
          <a class="nav-link" href="../confirmacion/index.php">Inicio</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="../index.php">Servicios</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link  active" href="#marketplace">Pruevas</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link  active" href="#contact">Contacto</a>
        </li>
      </ul>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="button">
          <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-rounded">
            Mi cuenta
          </a>
          <a href="index.php?vista=logout" class="button is-link is-rounded">
            Salir
          </a>
        </div>
      </div>
    </div>
    </div>
</nav>
<div class="container p-5">

</div>
<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable ">
                <a class="navbar-link">Usuarios</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorías</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=category_new" class="navbar-item">Nueva</a>
                    <a href="index.php?vista=category_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=category_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Por categoría</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                </div>
            </div>

        </div>
    </div>
</nav>