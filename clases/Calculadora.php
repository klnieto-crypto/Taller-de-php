<?php
class Calculadora {

    public function calcular($a, $b, $operacion) {
        switch ($operacion) {
            case "suma":
                return $a + $b;

            case "resta":
                return $a - $b;

            case "multiplicacion":
                return $a * $b;

            case "division":
                return $b != 0 ? $a / $b : "Error: división por cero";

            case "porcentaje":
                return ($a * $b) / 100;

            default:
                return "Operación no válida";
        }
    }
}