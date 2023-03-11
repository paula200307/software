<?php
    session_start();
    if(!isset($_SESSION["Usuario"])){
        header ('Location: ../index.php');
    }
    //$_SESSION["Usuario"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>servicios</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css"  rel="stylesheet">
	<link href="../libs/bootstrap-icons/bootstrap-icons.css"  rel="stylesheet">
	<script src="../js/bootstrap.bundle.min.js"></script>
	<meta charset="utf-8">
</head>

<body>
<?php
include '../modules/menu.php';
?>
    <div class="container">
       <nav class="navbar navbar-expand-sm bg-light">
       <a href="#" class="navbar-brand ms-2 text-dark"><h2>Bienvenido <?php echo $_SESSION["Usuario"]?></h2></a>
       <button class="navbar-toggler" type="buttom" data-bs-toggle="collapse" data-bs-target="#menuR"><span class="navbar-toggler-icon"></span></button>
       <div class="collapse navbar-collapse" id="menuR">
       </div>
       </nav>
    
            
        </div>
    </div>

<!-- servicios-->
    
<div class="container mt-5" >
		<div class="row">
			<div class="col col-sm-2 ">
			 <!-- Acoordion-->
				<div class="accordion" style="margin-top: 20px;">
					<div class="accordion-item">
						<h5 class="accordion-header" id="flush-headingOne">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
								<i class="bi bi-gear-fill"></i>  Configuración
							</button>
						</h5>
						<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">	<i class="bi bi-file-earmark-fill"></i> Manual<br>
								<i class="bi bi-person-fill"></i> Usuarios<br>
								<i class="bi bi-shield-fill"></i>Privacidad
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h5 class="accordion-header" id="flush-headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
								<i class="bi bi-cash"></i>  Inventario
							</button>
						</h5>
						<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">	
								<i class="bi bi-calendar-event"></i> Calendario<br>
								<i class="bi bi-currency-dollar"></i> Ventas
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h5 class="accordion-header" id="flush-headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
								<i class="bi bi-people-fill"></i>  Proveedores
							</button>
						</h5>
						<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">	
								<i class="bi bi-building"></i> Empresa <br>
								<i class="bi bi-hospital-fill"></i> Productos
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h5 class="accordion-header" id="flush-headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
								<i class="bi bi-people-fill"></i> Clientes
							</button>
						</h5>
						<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">	
								<i class="bi bi-credit-card-2-back"></i> Cuenta <br>
								<i class="bi bi-currency-dollar"></i> Saldo
							</div>
						</div>
					</div>

					<div class="accordion-item ">
						<h5 class="accordion-header" id="flush-headingFive">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
								<i class="bi bi-file-text"></i>  Nomina
							</button>
						</h5>
						<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">	
								<i class="bi bi-person-fill"></i> Empleado <br>
								<i class="bi bi-alarm-fill"></i> Horasdo
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h5 class="accordion-header" id="flush-headingSix">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
								<i class="bi bi-key-fill"></i>  Cerrar Sesion
							</button>
						</h5>
						<div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">	
								<i class="bi bi-door-open-fill"></i>Salir <br>
							</div>
						</div>
					</div>
				</div>
            </div>

			<div class="col-10 ">
				<div class="container ms-5">
					<div class="row fustify-content-center">
						<div class="col col-3">
							<div class="card mt-5 bg-secondary" style="width: 13rem;" >
								<i class="bi bi-cart-check-fill" style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
								<div class="card-body">
									<p class="card-text"><b>Ventas: </b>0</p>
									<a href='http://localhost/software/Sistema venta/sistema/ventas.php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
								</div>
							</div>
						</div>
					<div class="col col-3">
						<div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-cash" style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
							<div class="card-body">
								<p class="card-text"><b>Inventario: </b>0</p>
								<a href='http://localhost/software/Sistema venta/sistema/lista_productos.php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
							</div>
						</div>
					</div>
					<div class="col col-3">
                        <div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-people-fill" style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
                            <div class="card-body">
                                <p class="card-text"><b>Clientes: </b>0</p>
								<a href='http://localhost/software/Sistema venta/sistema/lista_cliente.php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
                            </div>
                        </div>
                    </div>
					<div class="col col-3">
                        <div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-people-fill"  style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
                            <div class="card-body">
                                <p class="card-text"><b>Proveedores: </b>0</p>
								<a href='http://localhost/software/Sistema venta/sistema/lista_proveedor.php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="row justify-content-center">
					<div class="col col-3">
						<div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-people-fill" style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
							<div class="card-body">
								<p class="card-text"><b>Facturas: </b>0</p>
								<a href='http://localhost/software/Sistema venta/sistema/factura/generaFactura.php?cl=2&f=1' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
							</div>
						</div>
					</div>
					<div class="col col-3">
						<div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-currency-dollar" style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
							<div class="card-body">
								<p class="card-text"><b>Gastos: </b>0</p>
								<a href='"+num+".php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
							</div>
						</div>
					</div>
					<div class="col col-3">
						<div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-inbox-fill"  style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
							<div class="card-body">
								<p class="card-text"><b>Cajas: </b>0</p>
								<a href='"+num+".php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
							</div>
						</div>
					</div>
					<div class="col col-3">
						<div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-file-earmark-fill" style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
							<div class="card-body">
								<p class="card-text"><b>Informes: </b>0</p>
								<a href='http://localhost/software/Sistema%20venta/sistema/reportes_descargas.php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
							</div>
						</div>
					</div>
        		</div>
				<div class="row justify-content-center">
					<div class="col col-3">
						<div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-file-text" style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
							<div class="card-body">
								<p class="card-text"><b>Nomina: </b>0</p>
								<a href='http://localhost/software/Sistema%20venta/sistema/nomina.php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
							</div>
						</div>
					</div>
					<div class="col col-3">
						<div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-box-fill" style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
							<div class="card-body">
								<p class="card-text"><b>Productos: </b>0</p>
								<a href='http://localhost/software/Sistema venta/sistema/lista_productos.php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
							</div>
						</div>
					</div>
					<div class="col col-3">
						<div class="card mt-5 bg-secondary" style="width: 13rem;" >
							<i class="bi bi-currency-dollar"  style="font-size: 6em; margin-left: 40px; margin-top: 20px;"></i>
							<div class="card-body">
								<p class="card-text"><b>Ingresos: </b>0</p>
								<a href='"+num+".php' class='btn btn-sm btn-outline-info mt-2'> Abrir <i class=' bi bi-file-earmark-plus'></i></a>
							</div>
						</div>
					</div>
        		</div>
			</div>										
		</div>
	</div>
</div>
    
    <div class="bg-dark text-secondary text-center">
        <hr>    
        <i class="bi bi-c-circle me-2"></i> Todos los derechos reservados.
        2018-<?php echo date("Y"); ?>
    </div>
</body>
</html>