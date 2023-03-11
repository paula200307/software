<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Software</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<head>
        <?php include "./inc/head.php"; ?>
    </head>
  <?php
  if (isset($_SESSION["ErrorDB"])) {
    echo '<div class="alert alert-danger"">
        <strong>Error:</strong> No se ha podido establecer conexion
        </div>';
    session_unset();
    session_destroy();
  }

  if (isset($_SESSION["Status"])) {
    echo '<div class="alert alert-success"">
        <strong>Error:</strong> La operacion ha sido realizada.
        </div>';
    session_unset();
    session_destroy();
  }
  ?>
  <?php
  include '../modules/menu.php';
  ?>

  <div class="modal modal-signin position-static d-block bg-secondary py-5 text-center" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0 text-center">Iniciar sesion</h2>

        </div>
        <div class="modal-body p-5 pt-0">
          <small class="text-center">Bienvenido a Alemar </small>
          <form action="inicio.php" method="POST" >
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" required>
              <div class="invalid-feedback text-white"><mark> Por favor llene este campo</mark></div>
              <label for="email"><i class="bi bi-person-fill">Nombre</i></label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido" name="apellido" required>
              <div class="invalid-feedback text-white"><mark> Por favor llene este campo</mark></div>
              <label for="apellido"><i class="bi bi-envelope">Apellido</i></label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="Ingrese su email" name="email" required>
              <div class="invalid-feedback text-white"><mark> Por favor llene este campo</mark></div>
              <label for="email"><i class="bi bi-envelope">Email</i></label>

            </div>

            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="password" placeholder="Ingrese su Email" name="password" required>
              <label for="password"><i class="bi bi-lock">Password</i></label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="numcel" placeholder="Ingrese su numcel" name="numcel" required>
              <div class="invalid-feedback text-white"><mark> Por favor llene este campo</mark></div>
              <label for="numcel"><i class="bi bi-envelope"> Número de celular</i></label>
            </div>
            <div class="form-floating mb-3">
              <button type="submit" class="btn btn-success m-5"><i class="bi bi-pc me-1"> Concluir</i></button>
            </div>
          </form>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Ingresar</button>
          <small class="text-muted">recordar contraseña</small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Registrarse con:</h2>

          <button type="button" class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            <i class="bi bi-twitter" style="color:#111011; font-size: 1em;">
            </i> Twitter</button>

          <button type="button" class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            <i class="bi bi-facebook" style="color:#111011; font-size: 1em;">
            </i> Facebook</button>

          <button type="button" class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            <i class="bi bi-instagram" style="color:#111011; font-size: 1em;">
            </i> Instagram</button>

          </form>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="bg-dark text-secondary text-center">

    <i class="bi bi-c-circle me-2"></i> Todos los derechos reservados.
    2022-<?php echo date("Y"); ?>
  </div>
</body>

</html>