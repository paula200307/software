<?php
include "../conexion.php";
$productos= "SELECT * FROM producto";
header("Content-Type: application/vnd.ms-excel; charset-iso 8859-1");
header("Content-Disposition: attachment; filename=datos-producto.xls");
?>
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
        </table>