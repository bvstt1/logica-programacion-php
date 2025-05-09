<?php
# Operadores aritmeticos más comunes
$numero1 = 5;
$numero2 = 4;
echo "Operadores artimeticos más comunes:";

# Suma
echo "<br><br>";
echo $numero1 + $numero2;
$suma = $numero1 + $numero2;
echo " | " . $suma;

# Resta
echo "<br>";
echo $numero1 - $numero2;
$resta = $numero1 - $numero2;
echo " | " . $resta;

# Multiplicación
echo "<br>";
echo $numero1 * $numero2;
$mult = $numero1 * $numero2;
echo " | " . $mult;

# División
echo "<br>";
echo $numero1 / $numero2;
$div = $numero1 / $numero2;
echo " | " . $div;

#Módulo (resto de la división)
echo "<br>";
echo $numero1 % $numero2;
$modulo = $numero1 % $numero2;
echo " | " . $modulo;

#Exponenciación (numero1 'eleveado a' numero2)
echo "<br>";
echo $numero1 ** $numero2;
$exp = $numero1 ** $numero2;
echo " | " . $exp;

#Operadores lógicos
echo "<br><br>Operadores lógicos";

$mayorQue = $numero1 > $numero2;
$menorQue = $numero1 < $numero2;
$mayorOIgualQue = $numero1 >= $numero2;
$menorOIgualQue = $numero1 <= $numero2;
$igual = $numero1 == $numero2;
$estrictamenteIgual = $numero1 === $numero2;
$distinto = $numero1 != $numero2;
$estrictamenteDistinto = $numero1 !== $numero2;

// Operadores lógicos (suponiendo condiciones booleanas)
$condicion1 = true;
$condicion2 = false;

$yLogico = $condicion1 && $condicion2;
$oLogico = $condicion1 || $condicion2;
$noLogico = !$condicion1;

// Mostrar resultados
echo "<br>\$numero1 > \$numero2: " . ($mayorQue ? "true" : "false"); #En PHP, el signo de interrogación (?) que estás viendo se usa comúnmente en el operador ternario, 
                                                                     #que es una forma corta de escribir una estructura if-else.
echo "<br>\$numero1 < \$numero2: " . ($menorQue ? "true" : "false");
echo "<br>\$numero1 >= \$numero2: " . ($mayorOIgualQue ? "true" : "false");
echo "<br>\$numero1 <= \$numero2: " . ($menorOIgualQue ? "true" : "false");
echo "<br>\$numero1 == \$numero2: " . ($igual ? "true" : "false");
echo "<br>\$numero1 === \$numero2: " . ($estrictamenteIgual ? "true" : "false");
echo "<br>\$numero1 != \$numero2: " . ($distinto ? "true" : "false");
echo "<br>\$numero1 !== \$numero2: " . ($estrictamenteDistinto ? "true" : "false");

echo "<br><br>Operadores lógicos:";
echo "<br>true && false: " . ($yLogico ? "true" : "false");
echo "<br>true || false: " . ($oLogico ? "true" : "false");
echo "<br>!true: " . ($noLogico ? "true" : "false");
echo "<br><br>";

/*
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.
 *
 * Seguro que al revisar detenidamente las posibilidades has descubierto algo nuevo.
 */

for ($i = 1; $i <= 55; $i++){
    if($i === 16 || $i%3 === 0 ){
        continue;
    }else{
        echo " " . $i . ", ";
    }
};
?>