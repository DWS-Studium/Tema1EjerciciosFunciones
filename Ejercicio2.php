<?php
/**
 * Crea un procedimiento llamado estadisticas($array). 
 * El procedimiento recibirá un array de notas por parámetro e imprimirá por pantalla la nota máxima, la mínima y la media
 */
$notas=[1,5,7,6,4];
estadisticas($notas);

function estadisticas($array)
{
    $minimo=min($array);
    $maximo=max($array);
    $media = array_sum($array)/count($array);
    echo 'El valor mínimos es: '.$minimo.'<br/>';
    echo 'El valor máximo es: '.$maximo.'<br/>';
    echo 'El valor de la média es: '.$media.'<br/>';
}