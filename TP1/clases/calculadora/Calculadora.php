<?php

class Calculadora {

    private $a;
    private $b;
    
    public function getA() {
        return $this->a;
    }

    public function setA($a) {
        $this->a = $a;
    }

    public function getB() {
        return $this->b;
    }

    public function setB($b) {
        $this->b = $b;
    }
    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

    public function dividir($a, $b) {
        return $a / $b;
    }

    function __toString()
    {     
        return $this->getA() . "," . $this->getB();
    }
}