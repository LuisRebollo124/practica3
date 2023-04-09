<?php
$texto="";
if (isset($_POST["añadir"])){
    $texto=$_POST["añadir"];
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../colores/estilos.css">
</head>
<body>
    <h1>Lista de tareas</h1>
    <form method="post">
        <input type="text" id="tarea">
        <button id="añadir" class="añadir">+</button>
    </form>
    <div>
        <ul id="lista">
            <?php
                echo "<li>$texto</li>";
            ?>
        </ul>
    </div>
</html>