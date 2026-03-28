<?php
session_start();
require_once("../clases/Calculadora.php");

$resultado = "";

if (!isset($_SESSION['historial'])) {
    $_SESSION['historial'] = [];
}

if (isset($_POST['calcular'])) {
    $a = floatval($_POST['num1']);
    $b = floatval($_POST['num2']);
    $operacion = $_POST['operacion'];

    $calc = new Calculadora();
    $res = $calc->calcular($a, $b, $operacion);

    $resultado = "Resultado: $res";

    $_SESSION['historial'][] = "$a $operacion $b = $res";
}

if (isset($_POST['borrar'])) {
    $_SESSION['historial'] = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<div class="container">

<h1>🧮 Calculadora</h1>

<form method="POST">

    <input type="number" step="any" name="num1" placeholder="Número 1" required>
    <br><br>

    <input type="number" step="any" name="num2" placeholder="Número 2" required>
    <br><br>

    <select name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
        <option value="porcentaje">Porcentaje</option>
    </select>

    <br><br>

    <button type="submit" name="calcular">Calcular</button>
    <button type="submit" name="borrar">Borrar Historial</button>

</form>

<div class="resultado">
    <?php echo $resultado; ?>
</div>

<h3>📜 Historial</h3>

<div class="resultado">
    <?php
    if (!empty($_SESSION['historial'])) {
        foreach ($_SESSION['historial'] as $item) {
            echo $item . "<br>";
        }
    } else {
        echo "Sin historial";
    }
    ?>
</div>

<br>
<a href="../index.php">⬅ Volver al menú</a>

</div>

</body>
</html>