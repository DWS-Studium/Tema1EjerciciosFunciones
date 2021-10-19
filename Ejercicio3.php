<?php
/**
 * Crea una función llamada agregar_nota($array, $nota), que recibe un array con notas 
 * y devuelve el mismo array con el segundo parámetro agregado al final.
 */
$a=[1,5,7];
var_dump(agregar_nota($a, 10));
function agregar_nota($array, $nota)
{
    $tabla=[];
    foreach($array as $datos){
        $tabla[]=$datos;
    }
    
    $tabla[]=$nota;
    return $tabla;
}