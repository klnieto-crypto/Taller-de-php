<?php
require_once("../clases/Conjuntos.php");

$resultado = "";

if ($_POST) {
    // Convertir entradas a arrays de enteros
    $A = array_map('intval', array_map('trim', explode(",", $_POST['conjuntoA'])));
    $B = array_map('intval', array_map('trim', explode(",", $_POST['conjuntoB'])));

    $obj = new Conjuntos();

    $union = $obj->union($A, $B);
    $interseccion = $obj->interseccion($A, $B);
    $diferenciaAB = $obj->diferenciaAB($A, $B);
    $diferenciaBA = $obj->diferenciaBA($A, $B);

    $resultado = "
        Unión (A ∪ B): " . implode(", ", $union) . "<br>
        Intersección (A ∩ B): " . implode(", ", $interseccion) . "<br>
        Diferencia (A - B): " . implode(", ", $diferenciaAB) . "<br>
        Diferencia (B - A): " . implode(", ", $diferenciaBA);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conjuntos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<div class="container">

    <h1>🔗 Conjuntos</h1>

    <form method="POST">

        <input type="text" name="conjuntoA" placeholder="Conjunto A: 1,2,3" required>
        <br><br>
        <input type="text" name="conjuntoB" placeholder="Conjunto B: 3,4,5" required>
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