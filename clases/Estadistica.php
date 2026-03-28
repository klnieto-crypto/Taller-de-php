<?php
class Estadistica {

    public function promedio($numeros) {
        return array_sum($numeros) / count($numeros);
    }

    public function media($numeros) {
        return $this->promedio($numeros);
    }

   public function moda($numeros) {

    // Convertir a string para evitar error con decimales
    $numeros = array_map('strval', $numeros);

    $conteo = array_count_values($numeros);

    if (empty($conteo)) {
        return [];
    }

    $max = max($conteo);

    $moda = [];

    foreach ($conteo as $num => $freq) {
        if ($freq == $max) {
            $moda[] = $num;
        }
    }

    return $moda;
}
}