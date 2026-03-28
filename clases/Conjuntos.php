<?php
class Conjuntos {

    // Unión de A y B
    public function union($A, $B) {
        return array_values(array_unique(array_merge($A, $B)));
    }

    // Intersección de A y B
    public function interseccion($A, $B) {
        return array_values(array_intersect($A, $B));
    }

    // Diferencia A - B
    public function diferenciaAB($A, $B) {
        return array_values(array_diff($A, $B));
    }

    // Diferencia B - A
    public function diferenciaBA($A, $B) {
        return array_values(array_diff($B, $A));
    }
}