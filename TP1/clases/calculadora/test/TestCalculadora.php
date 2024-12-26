<?php
include 'Calculadora.php';

class TestCalculadora{
    public function test(){
        $calculadoraTest = new Calculadora();
        $calculadoraTest->setA(2);
        $calculadoraTest->setB(2);

        if(4 == $calculadoraTest->sumar(2, 2)){
            echo "Test sumar exitoso";
        }else{ 
            echo "Test sumar fallido";
        }

        if(0 == $calculadoraTest->restar(2, 2)){
            echo "Test restar exitoso";
        }else{
            echo "Test restar fallido";
        }

        if(4 == $calculadoraTest->multiplicar(2, 2)){
            echo "Test multiplicar exitoso";
        }else{
            echo "Test multiplicar fallido";
        }

        if(1 == $calculadoraTest->dividir(2, 2)){
            echo "Test dividir exitoso";
        }else{
            echo "Test dividir fallido";
        }

        if("2,2" == $calculadoraTest->__toString()){
            echo "Test __toString exitoso";
        }else{
            echo "Test __toString fallido";
        }

    }
}

