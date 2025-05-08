<?php
#Primer ejercicio de lógica de programación

// El lenguaje que utilizare es PHP: https://www.php.net/

/*
También esta la
opción
de usar mas de una linea como mentario
*/

echo "Hola PHP!<br>"; # Se utiliza 'echo' para mostrar elementos en pantalla

echo "<br>"; # <br> = Salto de linea HTML | php soporta texto html y js

# Definimos variables con -> $ | Las variables NO pueden comenzar con un numero
$variableInt = 1;
$variableFloat = 0.5;
$variableChar = "Soy una cadena de texto";
$variebleBoolTrue = true;
$variebleBoolFalse = false;
$variableNull = null;
echo "Vriable int: {$variableInt}<br>";
echo "Vriable float: {$variableFloat}<br>";
echo "Vriable Char: {$variableChar}<br>";
echo "Vriable booleana true: {$variebleBoolTrue}<br>"; # 1 = true
echo "Vriable booleana false: {$variebleBoolFalse}<br>"; # " " = false
echo "Vriable null: {$variableNull}<br>";

echo "<br>";

# Se pueden definir constantes con const y define("nombre de la constante", "dato")
const constante1 = "No puedo cambiar.<br>";
define("constante2", "Yo tampoco puedo cambiar.<br>");
echo "Constante 1: " . constante1;
echo "Constante 2: " . constante2;

?>