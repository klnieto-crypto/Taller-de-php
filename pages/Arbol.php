<?php
require_once("../clases/Arbol.php");

$recorridos = "";
$arbolTexto = "";

if ($_POST) {

    $preorden = array_map('trim', explode(",", $_POST['preorden']));
    $inorden = array_map('trim', explode(",", $_POST['inorden']));

    $arbol = new Arbol();
    $raiz = $arbol->construirPreIn($preorden, $inorden);

    // 🔁 recorridos
    $pre = $in = $post = [];

    $arbol->preorden($raiz, $pre);
    $arbol->inorden($raiz, $in);
    $arbol->postorden($raiz, $post);

    $recorridos = "
        <b>Preorden:</b> " . implode(" → ", $pre) . "<br>
        <b>Inorden:</b> " . implode(" → ", $in) . "<br>
        <b>Postorden:</b> " . implode(" → ", $post);

    // 🌳 árbol ABB debajo
    $arbolTexto = "<pre>" . $arbol->dibujarABB($raiz) . "</pre>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Árbol</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>

<body>

<div class="container">

<h1>🌳 Árbol Binario</h1>

<form method="POST">
    <input type="text" name="preorden" placeholder="Preorden: A,B,D,E,C" required>
    <br><br>
    <input type="text" name="inorden" placeholder="Inorden: D,B,E,A,C" required>
    <br><br>
    <button type="submit">Generar</button>
</form>

<?php if (!empty($recorridos)): ?>

<div class="resultado">

    <h3>🔁 Recorridos</h3>
    <?= $recorridos; ?>

    <h3>🌳 Árbol ABB</h3>
    <?= $arbolTexto; ?>

</div>

<?php endif; ?>

<br>
<a href="../index.php">⬅ Volver</a>

</div>

</body>
</html>