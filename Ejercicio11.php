<?php
/**
 * Crea una página PHP con una función que recibe 2 parámetros con el tiempo de ayer y de hoy (hay 3 posibilidades, 
 * SOL, NUBLADO y LLUVIA). En función de ellos, muestra la predicción para mañana según la siguiente tabla:
 *   AYER	    |    HOY	    |    MAÑANA
 *-------------------------------------------
 *   SOL	    |    SOL	    |    SOL
 *   NUBLADO	|    NUBLADO	|    NUBLADO
 *   LLUVIA	    |    LLUVIA	    |    LLUVIA
 *   SOL	    |    NUBLADO	|    NUBLADO
 *   NUBLADO	|    SOL	    |    SOL 
 *   SOL	    |    LLUVIA	    |    NUBLADO
 *   LLUVIA	    |    SOL	    |    NUBLADO
 *   NUBLADO	|    LLUVIA	    |    LLUVIA
 *   LLUVIA	    |    NUBLADO	|    NUBLADO
 */
echo 'El tiempo de mañana es: '.tiempo('sol', 'LLUVIA');

 function tiempo ($ayer, $hoy){
    $predicion='';
    $ayer=strtoupper($ayer);
    $hoy=strtoupper($hoy);
    if($ayer == 'SOL'&& $hoy == 'SOL'){
        $predicion = 'SOL';
    }else if ($ayer == 'NUBLADO'&& $hoy == 'NUBLADO'){
        $predicion = 'NUBLADO';
    }else if ($ayer == 'LLUVIA'&& $hoy == 'LLUVIA'){
        $predicion = 'LLUVIA';
    }else if ($ayer == 'SOL'&& $hoy == 'NUBLADO'){
        $predicion = 'NUBLADO';
    }else if ($ayer == 'NUBLADO'&& $hoy == 'SOL'){
        $predicion = 'SOL';
    }else if ($ayer == 'SOL'&& $hoy == 'LLUVIA'){
        $predicion = 'NUBLADO';
    }else if ($ayer == 'LLUVIA'&& $hoy == 'SOL'){
        $predicion = 'NUBLADO';
    }else if ($ayer == 'NUBLADO'&& $hoy == 'LLUVIA'){
        $predicion = 'LLUVIA';
    }else if ($ayer == 'LLUVIA'&& $hoy == 'NUBLADO'){
        $predicion = 'NUBLADO';
    }
    return $predicion;
 }