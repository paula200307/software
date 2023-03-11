<?php
include_once "includes/header.php";
include '../conexion.php';
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
    <script>
        function arqueoCaja(){
            $('#abrir_caja').modal('show');
        }
        function abrirArqueo(e){
            e.preventDefault();
            const monto_inicial = document.grtElemeteById('monto_inicial').value;
            if(monto_inicial == ''){
                alert('Ingrese el Monto Inical', 'warning');
            }else{
                const url= base_url + "Cajas/abrirarqueo";
                const http = new XXMLHTTpRequest();
                http.open("POST", url, true);
                http.send(new FormData(this));
                http.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        const res = JSON.parse(this.responseText);
                    }
                }
            }
        }
</script>
</head>

<body>

  <header>
    <div class="alert alert-info">
        <h2>Arqueo</h2>
    </div>
  </header>
        <button class="btn btn-primary mb-2" type="button" onclick="arqueoCaja();"><i class="bi bi-plus-circle"></i></button>
        <table class="table" id="t_arqueo">
            <tr class="bg-primary">
                <th>ID</th>
                <th>USUARIO</th>
                <th>CAJA</th>
                <th>MONTO_INICIAL</th>
                <th>MONTO_FINAL</th>
                <th>FECHA_APERTURA</th>
                <th>FECHA_CIERRE</th>
                <th>TOTAL VENTAS</th>
                <th>MONTO TOTAL</th>
                <th>ESTADO</th>
            </tr>
        </table>
        <?php 
        ?>
        <div id="abrir_caja" class="modal fade" tabindex="-1" role="dialog" aria-label="Close">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="title"> Arqueo Caja</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="frmAbrirCaja" onsubmit="abrirArqueo(event);">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id">
                                <label for="monto_inicial">Monto Inicial</label>
                                <input type="text" name="monto_inicial" id="nombre" class="form-control" placeholder="Monto Inicial" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="id" name="id">
                                <label for="fecha_apertura">Fecha Apertura</label>
                                <input type="text" name="fecha_apertura" id="fecha_apertura" class="form-control" type="date" value="<?php echo date('Y-m-d');?>" required>
                            </div>
                            <button class="btn btn-primary" type="submit" id="btnAccion">Abrir</button>
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                        </form>
                    </div>
                </div>
           
            </div>

</div>

</body>



</html>
<?php include_once "includes/footer.php"; ?>