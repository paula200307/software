<?php
include_once "includes/header.php";
include '../conexion.php';
$productos= "SELECT * FROM producto";
?>

<!DOCTYPE html>
<html>

<head>
    <title>SOFTWARE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <link href="../../css/estilos.css" rel="stylesheet">
    <meta name="description" content="software para tiendas">
</head>

<body>

  <header>
    <div class="alert alert-info">
        <h2>Reportes</h2>
    </div>
  </header>
    <section>
        <table class="table">
            <tr class="bg-primary">
                <th>ID_PRODUCTO</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>EXISTENCIA</th>
            </tr>
            <?php
             $resultado = mysqli_query($conexion,$productos);
             while($fila=mysqli_fetch_array($resultado)){
                 echo'<tr>
                 <td>'.$fila['codproducto'].'</td>
                 <td>'.$fila['descripcion'].'</td>
                 <td>'.$fila['precio'].'</td>
                 <td>'.$fila['existencia'].'</td>
                 </tr>';
             }
            ?>
            <a href="excel.php" class="btn btn-primary" ><i class="fas fa-save"></i> Descargar</a>
        </table>
        </section>

</body>



</html>
<?php include_once "includes/footer.php"; ?>