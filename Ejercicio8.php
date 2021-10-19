<?php
/**
 * Crea una página PHP que contenga una función cuentavocales que recibe una cadena de texto 
 * y muestra por pantalla el número de vocales que tiene.
 */
$cadenatxt = "HOla mundo";
echo 'El numero de vocales es: '.cuentavocales($cadenatxt) ;

function cuentavocales($cadena) {
    //Creamos un contador
    $vocales=0;
    // recorremos cada elemento de la cadena
    //strlen devuelve rl numero de caracteres de la cadena
    for ($i=0;$i<strlen($cadena);$i++) {
        // obtenemos el caracter de la cadena y lo pasamos a minusculas
        $letra=strToLower($cadena[$i]);
        // si es vocal aumentamos el contador
        if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
            $vocales++;
        }
    }
    return $vocales;
}