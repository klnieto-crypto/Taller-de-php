<?php
class Nodo {
    public $valor;
    public $izq = null;
    public $der = null;

    public function __construct($valor) {
        $this->valor = $valor;
    }
}

class Arbol {

    // 🔥 CONSTRUIR DESDE PRE + IN
    public function construirPreIn($preorden, $inorden) {
        if (empty($preorden) || empty($inorden)) return null;

        $raizValor = array_shift($preorden);
        $raiz = new Nodo($raizValor);

        $indice = array_search($raizValor, $inorden);

        $izqIn = array_slice($inorden, 0, $indice);
        $derIn = array_slice($inorden, $indice + 1);

        $raiz->izq = $this->construirPreIn($preorden, $izqIn);
        $raiz->der = $this->construirPreIn($preorden, $derIn);

        return $raiz;
    }

    // 🔁 RECORRIDOS
    public function preorden($nodo, &$res = []) {
        if (!$nodo) return;
        $res[] = $nodo->valor;
        $this->preorden($nodo->izq, $res);
        $this->preorden($nodo->der, $res);
    }

    public function inorden($nodo, &$res = []) {
        if (!$nodo) return;
        $this->inorden($nodo->izq, $res);
        $res[] = $nodo->valor;
        $this->inorden($nodo->der, $res);
    }

    public function postorden($nodo, &$res = []) {
        if (!$nodo) return;
        $this->postorden($nodo->izq, $res);
        $this->postorden($nodo->der, $res);
        $res[] = $nodo->valor;
    }

    // 🌳 DIBUJO TIPO ABB (VERTICAL)
    public function dibujarABB($nodo, $nivel = 0) {
        if (!$nodo) return "";

        $resultado = "";

        // primero derecha
        $resultado .= $this->dibujarABB($nodo->der, $nivel + 1);

        // nodo
        $resultado .= str_repeat("   ", $nivel) . $nodo->valor . "\n";

        // izquierda
        $resultado .= $this->dibujarABB($nodo->izq, $nivel + 1);

        return $resultado;
    }
}