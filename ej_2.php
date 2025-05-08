<?php
/*
 * Crea una función que reciba dos parámetros de tipo cadena de texto y retorne un número.
 * - La función imprime todos los números del 1 al 100. Teniendo en cuenta que:
 *   - Si el número es múltiplo de 3, muestra la cadena de texto del primer parámetro.
 *   - Si el número es múltiplo de 5, muestra la cadena de texto del segundo parámetro.
 *   - Si el número es múltiplo de 3 y de 5, muestra las dos cadenas de texto concatenadas.
 *   - La función retorna el número de veces que se ha impreso el número en lugar de los textos.
 *
 * Presta especial atención a la sintaxis que debes utilizar en cada uno de los casos.
 * Cada lenguaje sigue una convenciones que debes de respetar para que el código se entienda. 
*/

$texto1 = "Multiplo de 3";
$texto2= "Multiplo de 5";

function fun($texto1 , $texto2){

    $cont = 0;
    for($i = 1; $i<=100; $i++ ){
        if($i%5 === 0 && $i%3===0){
            echo "{$texto1} y {$texto2} = {$i}<br>";
        }elseif($i%3 === 0){
            echo "{$texto1} = {$i}<br>";
        }elseif($i%5 === 0){
            echo "{$texto2} = {$i}<br>";
        }else{
            echo "{$i}" . "<br>";
            $cont += 1;
        }
    }
    return "<br>" . $cont . " veces se ha impreso numeros en lugar de texto";
}

$respuesta = fun($texto1, $texto2);
echo "$respuesta";

?>