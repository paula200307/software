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
          <a class="nav-link" href="http://localhost/software/Sistema venta/sistema/">Inicio</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="#inicio">Nosotros</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="http://localhost/software/confirmacion/index.php">Servicios</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link  active" href="#marketplace">Pruebas</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link  active" href="#contact">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon rotate-n-15">
			<img src="img/logo.jpg" class="img-thumbnail">
		</div>
		<div class="sidebar-brand-text mx-3">Alemar</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Ventas</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="nueva_venta.php">Nueva venta</a>
				<a class="collapse-item" href="ventas.php">Ventas</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Productos Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Productos</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_producto.php">Nuevo Producto</a>
				<a class="collapse-item" href="lista_productos.php">Productos</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Clientes Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-users"></i>
			<span>Clientes</span>
		</a>
		<div id="collapseClientes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_cliente.php">Nuevo Clientes</a>
				<a class="collapse-item" href="lista_cliente.php">Clientes</a>
			</div>
		</div>
	</li>
	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedor" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-hospital"></i>
			<span>Proveedor</span>
		</a>
		<div id="collapseProveedor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_proveedor.php">Nuevo Proveedor</a>
				<a class="collapse-item" href="lista_proveedor.php">Proveedores</a>
			</div>
		</div>
	</li>
	<!-- Cajas-->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCajas" aria-expanded="true" aria-controls="collapseUtilities">
		<i class="bi bi-inbox-fill" ></i>
			<span>Cajas</span>
		</a>
		<div id="collapseCajas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_proveedor.php">Cajas</a>
				<a class="collapse-item" href="lista_proveedor.php">Arqueo </a>
			</div>
		</div>
	</li>

	<?php if ($_SESSION['rol'] == 1) { ?>
		<!-- Nav Item - Usuarios Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-user"></i>
				<span>Usuarios</span>
			</a>
			<div id="collapseUsuarios" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="registro_usuario.php">Nuevo Usuario</a>
					<a class="collapse-item" href="lista_usuarios.php">Usuarios</a>
				</div>
			</div>
		</li>
	<?php } ?>

</ul>