<?php
/*
 * Crea un programa que analice dos palabras diferentes y realice comprobaciones
 * para descubrir si son:
 * - Palíndromos
 * - Anagramas
 * - Isogramas
*/
function palindromo($text){
    $text = strtolower(str_replace('', ' ', $text)); # Pasa todos los caracteres de la cadena a minuscula y elimina espacios
    $textInvertido = strrev($text); # Invierte la cadena
    if ($text === $textInvertido){
        echo "Es palindromo";
    }else{
        echo "No es palindromo";
    }
}

function anagrama($text1, $text2){
    $text1 = strtolower(str_replace('', ' ', $text1));
    $text2 = strtolower(str_replace('', ' ', $text2));
    $arrayText1 = str_split($text1);
    $arrayText2 = str_split($text2);
    $comparacion = array_diff($arrayText1, $arrayText2); # Calcula la direfencia entre los arrays
    if(empty($comparacion)){ # si esta vacio tienen los mismos caracteres
        echo "Son anagramas";
    }else{
        echo "No son anagramas";
    }
}

function isograma($text){
    $letras = [];
    $text = strtolower(str_replace('', ' ', $text));
    $longitud = strlen($text);

    for ($i = 0; $i < $longitud; $i++) {
        $letra = $text[$i];
        if (isset($letras[$letra])) {
            echo "No es Isograma."; // La letra ya existe, no es isograma
        }
        $letras[$letra] = true; // Marcar la letra como vista
    }
    echo "Es isograma."; // Todas las letras son únicas, es isograma
}
echo palindromo("osos");
echo "<br>";
echo anagrama("amor", "roma");
echo "<br>";
echo isograma("ambidiestro"); # Corregir


?>