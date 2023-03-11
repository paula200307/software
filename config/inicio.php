<?php 

session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "software";

$mysqli = new mysqli($server, $user, $pass, $db);
if($mysqli->connect_error){
    echo "No se ha podido conectar";
}
            include 'seguridad.php';
            $limpieza = new Seguridad;
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];

            $password= $limpieza->encriptarP($_POST["password"]); 
            $sql = "INSERT INTO registro (nombre, apellido,email,numcel,password)
            VALUES('" .$_POST["nombre"]."', '" .$_POST["apellido"]."', '" .$_POST["email"]."', '" .$_POST["numcel"]."','".$password."');";
            $r = $mysqli->query($sql);
            if($r->num_rows > 0){
                while($fila = $r->fetch_assoc()){
                    $_SESSION["Error"];
                    header('Location: config.php');
                }
            }else{
                $_SESSION['Status'] = "Se ha registrado exitosdamente";
                header('Location: config.php');

            }


