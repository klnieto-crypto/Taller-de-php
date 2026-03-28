<?php
class Fibonacci {

    // Serie de Fibonacci
    public function serie($n) {
        $resultado = [];

        if ($n >= 1) $resultado[] = 0;
        if ($n >= 2) $resultado[] = 1;

        for ($i = 2; $i < $n; $i++) {
            $resultado[] = $resultado[$i-1] + $resultado[$i-2];
        }

        return $resultado;
    }

    // Factorial
    public function factorial($n) {
        $fact = 1;

        for ($i = 1; $i <= $n; $i++) {
            $fact *= $i;
        }

        return $fact;
    }
}