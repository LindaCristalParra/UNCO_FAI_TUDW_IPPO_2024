CLASE Reloj
    Privado:

        ENTERO segundo, minuto, hora, contSeg, contMin, contHra
    Publico:

        FUNCION setSegundo(ENTERO seg) 
            ENTERO segundo <-- seg
        FIN FUNCION

        FUNCION setMinuto(ENTERO min) 
            ENTERO minuto <-- min
        FIN FUNCION

        FUNCION setHora(ENTERO hra) 
            ENTERO hora <-- hra
        FIN FUNCION

        FUNCION getSegundo() RETORNA ENTERO
            retorna segundo
        FIN FUNCION

        FUNCION getMinuto() RETORNA ENTERO
            retorna minuto
        FIN FUNCION

        FUNCION getHora() RETORNA ENTERO
            retorna hora
        FIN FUNCION

        FUNCION _ _toString() RETORNA TEXTO
            retorna getSegundo() ":" getMinuto() ":" getHora()
        FIN FUNCION 

        FUNCION puesta_a_cero()
            ENTERO segundo <-- 00
            ENTERO minuto <-- 00
            ENTERO hora <-- 00
        FIN FUNCION     

        FUNCION incremento()

	        SI (hora < 23) Hacer
                SI (segundo < 59) HACER
                    segundo <-- segundo + 1
                SINO
                    SI (minuto < 59 ) HACER
                        minuto <-- minuto + 1
		            SINO 
                        hora <-- hora + 1
                    FIN SI
                FIN SI
	        SINO
	            puest_a_cero()
            FIN SI        
        FIN FUNCION     
FIN CLASE
