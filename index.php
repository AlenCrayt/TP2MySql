<?php
$BD = mysqli_connect("localhost", "root", "null", "test") or die("Error " . mysqli_error($BD));
if (isset($_POST["val"]) and isset($_POST["tel"]) and isset($_POST["estad"])){
    $envio = $_POST["val"];
    $tel = $_POST["tel"];
    $tiempo = $_POST["estad"];
    $camp = mysqli_query($BD, "INSERT INTO reservas (Nombre, Telefono, Estadia) VALUES('$envio', '$tel', '$tiempo');");
    unset($_POST["val"]);
    unset($_POST["tel"]);
    unset($_POST["estad"]);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../TP2/CSS/style.css">
    <title>Hotel Buena Vista</title>
</head>
<body class="principal">
    <div class="menu">
        <h1>Hotel Buena Vista</h1>
        <h3>Ingrese sus datos para hacer una reserva</h3>
        <form class="formulario" action="../TP2/index.php" method="post">
            <label for="val">Nombre</label>
            <input type="text" id="val" name="val">
            <label for="tel">Telefono</label>
            <input type="number" id="tel" name="tel">
            <label for="estad">Estadia</label>
            <input type="date" id="estad" name="estad">
            <input type="submit" value="Hacer Reserva">
        </form>
    </div>
</body>