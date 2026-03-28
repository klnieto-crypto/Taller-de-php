<?php
require_once("../clases/Estadistica.php");

$resultado = "";

if ($_POST) {
    $entrada = $_POST['numeros'];

    // Convertir texto a array
    $numeros = explode(",", $entrada);
    $numeros = array_map('floatval', $numeros);

    $obj = new Estadistica();

    $promedio = $obj->promedio($numeros);
    $media = $obj->media($numeros);
    $moda = $obj->moda($numeros);

    $resultado = "
        Promedio: $promedio <br>
        Media: $media <br>
        Moda: " . implode(", ", $moda);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadística</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<div class="container">

    <h1>📊 Estadística</h1>

    <form method="POST">

        <input type="text" name="numeros" placeholder="Ej: 1,2,3,4,4,5" required>

        <br><br>

        <button type="submit">Calcular</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

    <br>
    <a href="../index.php">⬅ Volver al menú</a>

</div>

</body>
</html>