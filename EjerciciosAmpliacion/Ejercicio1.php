<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*Escribe un programa que muestre tu horario de clase mediante una tabla imprimiendo desde php
*el html necesario así como los datos.
*/


//Imprimimos todo el documento HTML del horario de la clase
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
</head>
<style>
    
    table{
        margin: auto;
    }
    table tr td{
        text-align: center;
        font-size: 20px;
    }
    table td{
        border:solid black 1px;
        height: 80px;
    }
</style>
<body>
    <table>
        <tr>
            <td class="center" colspan="6">DAW2</td>
        </tr>
        <tr>
            <td></td>
            <td>Lunes</td>
            <td>Martes</td>
            <td>Miercoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
        </tr>
        <tr>
            <td>14:10-15:05</td>
            <td rowspan="2" style="background-color: pink;">Desarrollo WEB en entorno cliente</td>
            <td rowspan="2" style="background-color: yellow;">Despliege de aplicaciones</td>
            <td></td>
            <td rowspan="2" style="background-color: pink;">Desarrollo WEB en entorno cliente</td>
            <td rowspan="2" style="background-color: orange;">Desarrollo WEB en entorno servidor</td>
        </tr>
        <tr>
            <td>14:10-15:05</td>
            <td rowspan="2" style="background-color: orange;">Desarrollo WEB en entorno servidor</td>
        </tr>
        <tr>
            <td>16:00-16:55</td>
            <td style="background-color: green;">Empresa e Iniciativa</td>
            <td style="background-color: green;">Empresa e Iniciativa</td>
            <td style="background-color: orange;">Desarrollo WEB en entorno servidor</td>
            <td style="background-color: green;">Empresa e Iniciativa</td>
        </tr>
        <tr>
            <td></td>
            <td class="center" colspan="5">RECREO</td>
        </tr>
        <tr>
            <td>17:15-18:10</td>
            <td rowspan="2" style="background-color: orange;">Desarrollo WEB en entorno servidor</td>
            <td style="background-color: rgb(154, 187, 78);">Tutoria</td>
            <td rowspan="2" style="background-color: cadetblue;">Diseño de Interfaces</td>
            <td style="background-color: orange;">Desarrollo WEB en entorno servidor</td>
            <td rowspan="2" style="background-color: cadetblue;">Diseño de Interfaces</td>
        </tr>
        <tr>
            <td>18:10-19:05</td>
            <td rowspan="3" style="background-color: pink;">Desarrollo WEB en entorno cliente</td>
            <td rowspan="2" style="background-color: yellow;">Despliege de aplicaciones</td>
        </tr>
        <tr>
            <td>19:05-20:00</td>
            <td rowspan="2" style="background-color: cadetblue;">Diseño de Interfaces</td>
            <td rowspan="2" style="background-color: yellow;">Despliege de aplicaciones</td>
        </tr>
        <tr>
            <td>20:00-20:55</td>
        </tr>
    </table>
</body>
</html>';



?>