<?php
class Acronimo {

    public function generar($frase) {

        // Reemplazar guiones por espacios
        $frase = str_replace('-', ' ', $frase);

        // Eliminar signos de puntuación
        $frase = preg_replace("/[^a-zA-Z ]/", "", $frase);

        // Separar palabras
        $palabras = explode(" ", $frase);

        $resultado = "";

        // Tomar la primera letra de cada palabra
        foreach ($palabras as $p) {
            if (!empty($p)) {
                $resultado .= strtoupper($p[0]);
            }
        }

        return $resultado;
    }
}