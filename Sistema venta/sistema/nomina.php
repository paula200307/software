<?php include "includes/header.php"; ?>
<html>

    <head>
        <title>Cálculo de la nómina</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script>
 
function algoritmo()
{
    let n;
    let guerra, nomina, pensiones, salario_minimo, salud;
    let seguridad, sueldo_devengado;
    let nombre = document.formulario1.nombre1.value;
    salario_minimo = parseFloat (document.formulario1.salario_minimo.value);
    sueldo_devengado = parseFloat (document.formulario1.sueldo_devengado.value);
    salud=0;
    pensiones=0;
    seguridad=0;
    guerra=0;
    if(sueldo_devengado<=salario_minimo*3)
    {
        salud=sueldo_devengado*0.05;
        pensiones=sueldo_devengado*0.118;
        seguridad=sueldo_devengado*0.03;
    }
    if(sueldo_devengado>salario_minimo*4&&sueldo_devengado<salario_minimo*8)
    {
        salud=sueldo_devengado*0.1;
        pensiones=sueldo_devengado*0.15;
        seguridad=sueldo_devengado*0.05;
    }
    if(sueldo_devengado>salario_minimo*8&&salario_minimo<=salario_minimo*20)
    {
        salud=sueldo_devengado*0.2;
        pensiones=sueldo_devengado*0.13;
        seguridad=sueldo_devengado*0.1;
        guerra=sueldo_devengado*0.05;
    }
    nomina=sueldo_devengado-salud-pensiones-seguridad-guerra;
    document.formulario1.nombre2.value = nombre;
    document.formulario1.guerra.value = guerra;
    document.formulario1.nomina.value = nomina;
    document.formulario1.pensiones.value = pensiones;
    document.formulario1.salud.value = salud;
    document.formulario1.seguridad.value = seguridad;
}

 
        </script>
    </head>
    <body>
        <div class="container mt-5">
        <form name="formulario1">
            <table style="text-align: left; margin-left: auto; margin-right: auto;">
                <tbody>
                    <tr>
                        <td>
                            <label for="nombre1">Ingresa el nombre:</label>
                        </td>
                        <td>
                            <input name="nombre1" required="required" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="salario_minimo">Ingresa el valor de salario minimo:</label>
                        </td>
                        <td>
                            <input name="salario_minimo" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sueldo_devengado">Ingresa el valor de sueldo devengado:</label>
                        </td>
                        <td>
                            <input name="sueldo_devengado" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="button" onclick="algoritmo();" />
                            <input type="reset" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nombre2">Nombre:</label>
                        </td>
                        <td>
                            <input name="nombre2" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="guerra">Valor de guerra:</label>
                        </td>
                        <td>
                            <input name="guerra" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nomina">Valor de nomina:</label>
                        </td>
                        <td>
                            <input name="nomina" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pensiones">Valor de pensiones:</label>
                        </td>
                        <td>
                            <input name="pensiones" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="salud">Valor de salud:</label>
                        </td>
                        <td>
                            <input name="salud" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="seguridad">Valor de seguridad:</label>
                        </td>
                        <td>
                            <input name="seguridad" step="0.000001" type="number" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        </div>
    <?php include_once "includes/footer.php"; ?>