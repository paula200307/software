<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>SOFTWARE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link href="./css/estilos.css" rel="stylesheet">
    <meta name="description" content="software para tiendas">
</head>

<body>

    <?php
    if (isset($_SESSION["Error"])) {
        echo '<div class="alert alert-danger m-0"><i class="bi bi-x-octagon-fill"></i>';
        echo $_SESSION["Error"];
        echo '</div>';
        session_unset();
        session_destroy();
    }
    ?>
  

    <div class="modal modal-signin position-static d-block bg-secondary py-3 text-center" tabindex="-1" role="dialog" id="modalSignin" style="background-image:url(./img/fondo.jpg) ;">
    <img src="" alt="">  
    <div class="modal-dialog" role="document">
            <div class="modal-content  rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class=" text-center">Bienvenido a Alemar</h2>
                </div>

                <div class="modal-body p-5 pt-0">
                
                    <form action="principal/login.php" method="POST" class="was-validated">

                        <h2>REGISTRO</h2>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Ingrese su Email" name="email" required>
                            <div class="invalid-feedback text-white"><mark> Por favor llene este campo</mark></div>
                            <div class="valid-feedback">El correo electronico es adecuado</div>
                            <label for="email"><i class="bi bi-envelope">Email</i></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Ingrese su Email" name="password" required>
                            <label for="password"><i class="bi bi-lock">Password</i></label>
                        </div>

                        <div class="d-grid m-0">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success m-5"><i class="bi bi-send me-1">Ingresar</i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-drak text-withe text-center mt-5 fixed-bottom fs-5">
        <i class="bi bi-c-circle me-2"></i> Todos los derechos reservados.
        <?php echo date("Y"); ?>
    </div>
    </div>



</body>

</html>