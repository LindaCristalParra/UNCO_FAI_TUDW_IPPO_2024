CLASE Calculadora 

    Privado:

        REAL a, b

    Publico:

        FUNCION setA(REAL numa) 
            REAL a <-- numa
        FIN FUNCION
        
        FUNCION setB(REAL numb) 
            REAL b <-- numb
        FIN FUNCION
                
        FUNCION getA() RETORNA REAL
            retorna a
        FIN FUNCION

        FUNCION getB() RETORNA REAL
            retorna b
        FIN FUNCION

        FUNCION sumar(a, b) RETORNA REAL
            retorna a + b
        FIN FUNCION

        FUNCION restar(a, b) RETORNA REAL
            return a - b
        FIN FUNCION

        FUNCION multiplicar(a, b) RETORNA REAL
            retorna a * b
        FIN FUNCION

        FUNCION dividir(a, b) RETORNA REAL
            retorna a / b
        FIN FUNCION

        FUNCION __toString() RETORNA TEXTO
            retorna getA() + ", " + getB()
        FIN FUNCION
FIN CLASE