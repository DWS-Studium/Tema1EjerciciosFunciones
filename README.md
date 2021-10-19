Ejercicio 1<br/>
Crea una función llamada notas_aleatorias($size) que recibe un número entero y devuelve un array de tamaño $size lleno de notas aleatorias.

Ejercicio 2
Crea un procedimiento llamado estadisticas($array). El procedimiento recibirá un array de notas por parámetro e imprimirá por pantalla la nota máxima, la mínima y la media.

Ejercicio 3
Crea una función llamada agregar_nota($array, $nota), que recibe un array con notas y devuelve el mismo array con el segundo parámetro agregado al final.

Ejercicio 4
Crea una función llamada notas_aprobadas($array) que recibe un array de notas y devuelve otro array con las notas aprobadas.

Ejercicio 5
Crea un procedimiento llamado imprime_tabla($numero). Si el procedimiento recibe la cadena "todas", se imprimirán por pantalla las tablas de multiplicar del 1 al 10. En cambio, si recibe un número del 1 al 10, imprime la tabla.

Ejercicio 6
Crea una página PHP que contenga una función llamada primo que recibe un número como parámetro y devuelve los siguientes resultados:

Si el número es primo, muestra el mensaje: "El número es primo."
Si no lo es, muestra: "El número no es primo."
Ejercicio 7
Crea una página PHP que contenga una función que recibe 4 números y devuelve el valor medio de los 4.

Ejercicio 8
Crea una página PHP que contenga una función cuentavocales que recibe una cadena de texto y muestra por pantalla el número de vocales que tiene.

Ejercicio 9
Crea una página PHP que contenga una función cuadrado que recibe 2 parámetros, un carácter cualquiera y un número. La función debe mostrar un cuadrado con el carácter recibido (tantas filas y columnas como indique el número). Ejemplo:

cuadrado ("#", 3);
 ###
 ###
 ###
Ejercicio 10
Crea una página que contenga una función pirámide que recibe 2 parámetros, un carácter cualquiera y un número. La función debe mostrar una pirámide invertida con el carácter recibido, como se muestra en el ejemplo:

piramide ("@", 4);
 @@@@
 @@@
 @@
 @
Ejercicio 11
Crea una página PHP con una función que recibe 2 parámetros con el tiempo de ayer y de hoy (hay 3 posibilidades, SOL, NUBLADO y LLUVIA). En función de ellos, muestra la predicción para mañana según la siguiente tabla:

    AYER	    |    HOY	      |      MAÑANA
    ---------------------------------------------
    SOL	        |    SOL	      |      SOL
    NUBLADO	    |    NUBLADO	  |      NUBLADO
    LLUVIA	    |    LLUVIA	      |      LLUVIA
    SOL	        |    NUBLADO	  |      NUBLADO
    NUBLADO	    |    SOL	      |      SOL
    SOL	        |    LLUVIA	      |      NUBLADO
    LLUVIA	    |    SOL	      |      NUBLADO
    NUBLADO	    |    LLUVIA	      |      LLUVIA
    LLUVIA	    |    NUBLADO	  |      NUBLADO

Ejercicio 12
PHP permite incluir el contenido de un archivo dentro de otro. Para ello debe utilizar la sentencia include:

include 'nombre_fichero';
El procesador de PHP incluirá el contenido del archivo en el punto en el que se ha introducido la sentencia. Piense que es el equivalente a copiar y pegar el contenido del archivo en el mismo lugar donde tiene la sentencia include.

Esto le permite simplificar el código de las páginas. Por ejemplo, puede añadir un archivo de cabecera (cabecera.php) y uno de pie (pie.php) con los contenidos comunes de todas las páginas de su sitio (el banner, el menú, la información general). Sencillamente incluyendo estos archivos en todas las páginas, se puede conseguir una estética común. Si ha de cambiar en algún momento la cabecera, modificando el archivo cabecera.php lo tendréis modificado en todas las páginas de la web.

Hacer una página web con contenidos estructurados con dos ficheros: cabecera.php y pie.php.

Ejercicio 13
PHP no permite de entrada hacer una depuración de su ejecución. Por este motivo es habitual que los programadores pueblen su código con sentencias echo o printf para ir mostrando el contenido de sus variables o para mostrar que el flujo de ejecución ha llegado a algún punto del código.

El problema que tenemos es que una vez que hemos encontrado el error en el código, debemos ir comentando o borrando todas las líneas que servían para mostrar información de depuración en el código. Cuando encontremos otro error, debemos volver a activar todas estas sentencias.

Crea una función que me permita activar los mensajes de depuración fácilmente activando una constante con nombre DEBUG con el valor 1. Si DEBUG tiene cualquier valor diferente de 1, los mensajes de DEBUG no se mostrarán. Todos los mensajes de depuración se mostrarán dentro de un párrafo propio con el estilo depuración definido en CSS.

Nota: Para modificar la constante DEBUG puede hacer uso de la función define.

Ejercicio 14
Crea una función que reciba dos números y devuelva el número de números pares comprendidos entre ellos. Además, se deben imprimir dichos números. Llama a la función para comprobar su funcionamiento.

Ejercicio 15
Crea una página PHP con un procedimiento llamado cuadrado, que recibe un argumento (un número entero que representa la longitud del lado de un cuadrado). La función debe imprimir por pantalla el valor de la superficie y del perímetro del cuadrado. Declara un variable con el valor deseado y haz una llamada al procedimiento para comprobar su funcionamiento.

Ejercicio 16
Crea una función que recibe un parámetro y que calcule la suma de los números inferiores a él. Llámala desde el cuerpo del script e imprime el resultado por pantalla.

Ejercicio 17
Crea una página php que defina una función cuenta que recibe dos parámetros. El primero de ellos será un array de números enteros y el segundo parámetro una variable numérica. La función se encargará de contar el número de veces que se repite el número que recibe (segundo parámetro) dentro del array. A continuación, en el cuerpo de la página, crea un array y rellénalo con números aleatorios entre 1 y 10 y llama a la función para comprobar el resultado

Ejercicio 18
Busca una función que permita eliminar los valores repetidos de un array. Modifica el ejercicio anterior de forma que, tras la llamada a la función cuenta, llame a la función que elimina los valores repetidos, y vuelva a llamar a la función cuenta, para ver el resultado.

Ejercicio 19
Crea un script que defina una matriz de dos dimensiones llamada alumnos, que contiene los datos Nombre, Apellidos, Asignatura y Nota media para los alumnos de una clase con un total de 5 alumnos, como en el siguiente ejemplo:

    Alumno	    Nombre	    Apellidos	            Asignatura	    Nota media
    1	        Javier	    Escudero Fernández	    DWS	            9,8
    2	        ...	        ...	                    ...	            ...

En dicho script se define un procedimiento, comprueba, que reciba un número entero (identificador del alumno en la matriz anterior) y recorra la matriz que almacena los datos de dicho alumno, mostrándolos por pantalla. Para comprobar su funcionamiento, llame a la función comprueba desde el cuerpo de la página.

Crea otra función estadisticas, que reciba una matriz y devuelva la media de la clase y el número de aprobados. Llámala desde el cuerpo de la página.