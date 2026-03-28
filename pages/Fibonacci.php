<?php
require_once("../clases/Fibonacci.php");

$resultado = "";

if ($_POST) {
    $numero = $_POST['numero'];
    $operacion = $_POST['operacion'];

    $obj = new Fibonacci();

    if ($operacion == "fibo") {
        $serie = $obj->serie($numero);
        $resultado = implode(", ", $serie);
    } else {
        $resultado = $obj->factorial($numero);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<div class="container">

    <h1>🔢 Fibonacci / Factorial</h1>

    <form method="POST">

        <input type="number" name="numero" placeholder="Ingresa un número" required>

        <br><br>

        <select name="operacion">
            <option value="fibo">Serie de Fibonacci</option>
            <option value="fact">Factorial</option>
        </select>

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