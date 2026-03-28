<?php
require_once("../clases/Acronimo.php");

$resultado = "";

if ($_POST) {
    $frase = $_POST['frase'];

    $obj = new Acronimo();
    $resultado = $obj->generar($frase);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acrónimo</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<div class="container">

    <h1>🔤 Generador de Acrónimos</h1>

    <form method="POST">
        <input type="text" name="frase" placeholder="Ej: As Soon As Possible" required>
        <br><br>
        <button type="submit">Generar</button>
    </form>

    <h2><?php echo $resultado; ?></h2>

    <br>
    <a href="../index.php">⬅ Volver al menú</a>

</div>

</body>
</html>