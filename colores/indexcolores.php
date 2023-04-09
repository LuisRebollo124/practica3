<?php
session_start();

$colores = "";
if (isset($_SESSION["colores"])) {
    $colores = $_SESSION["colores"];
}

if (isset($_GET["color"])){
    if (isset($_SESSION["colores"])){
        $colores=$_SESSION["colores"];
    }
    else{
        $colores=array();
    }
    array_push($colores, $_GET["color"]);
    $_SESSION["colores"]=$colores;
}
header("location:indexcolores.php");
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colores aleatorios</title>
    <link rel="stylesheet" href="../tareas/style.css">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <style>
        .fondo{
            width:40%;
            height:40%;
        }
    </style>
</head>
<body>
<header>
    <table>
        <tr>
            <td><a href="mas.php">mas</a></td>
            <td><a href="menos.php">menos</a></td>
        </tr>
    </table>
</header>
<div class='fondo' style='background-color:rgb(19,235,133)'>&nbsp;</div><div class='fondo' style='background-color:rgb(225,175,59)'>&nbsp;</div><div class='fondo' style='background-color:rgb(121,156,11)'>&nbsp;</div><div class='fondo' style='background-color:rgb(110,87,147)'>&nbsp;</div><div class='fondo' style='background-color:rgb(71,214,30)'>&nbsp;</div><div class='fondo' style='background-color:rgb(245,154,210)'>&nbsp;</div><div class='fondo' style='background-color:rgb(240,102,160)'>&nbsp;</div><div class='fondo' style='background-color:rgb(132,45,48)'>&nbsp;</div><div class='fondo' style='background-color:rgb(221,246,22)'>&nbsp;</div><div class='fondo' style='background-color:rgb(180,81,38)'>&nbsp;</div><div class='fondo' style='background-color:rgb(102,239,80)'>&nbsp;</div>

</body>
</html>
