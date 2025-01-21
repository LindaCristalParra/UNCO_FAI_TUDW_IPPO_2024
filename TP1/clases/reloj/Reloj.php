<?php
class Reloj {
    private $segundo, $minuto, $hora, $contSeg, $contMin, $contHra;

    public function setSegundo($seg) {
        $this->segundo = $seg;
    }

    public function setMinuto($min) {
        $this->minuto = $min;
    }

    public function setHora($hra) {
        $this->hora = $hra;
    }

    public function getSegundo() {
        return $this->segundo;
    }

    public function getMinuto() {
        return $this->minuto;
    }

    public function getHora() {
        return $this->hora;
    }

    public function __toString() {
        return $this->getHora() . ":" . $this->getMinuto() . ":" . $this->getSegundo();
    }

    public function puesta_a_cero() {
        $this->segundo = 0;
        $this->minuto = 0;
        $this->hora = 0;
    }

    public function incremento() {
        if ($this->hora < 23) {
            if ($this->segundo < 59) {
                $this->segundo++;
            } else {
                $this->segundo = 0;
                if ($this->minuto < 59) {
                    $this->minuto++;
                } else {
                    $this->minuto = 0;
                    $this->hora++;
                }
            }
        }
    }
}