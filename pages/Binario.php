<?php
require_once("../clases/Binario.php");

$resultado = "";

if ($_POST) {
    $numero = intval($_POST['numero']);
    $obj = new Binario();
    $resultado = $obj->aBinario($numero);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Binario</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<div class="container">

    <h1>💻 Convertir a Binario</h1>

    <form method="POST">
        <input type="number" name="numero" placeholder="Ingresa un número entero" required>
        <br><br>
        <button type="submit">Convertir</button>
    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

    <br>
    <a href="../index.php">⬅ Volver al menú</a>

</div>

</body>
</html>