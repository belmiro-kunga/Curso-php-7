<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Números no PHP</h1>
<?php


/*

2, 256, -256, 10358, -179567 são todos inteiros. Enquanto 7,56, 10,0, 150,67 são flutuadores.

Portanto, um tipo de dado inteiro é um número não decimal entre -2147483648 e 2147483647.
 Um valor maior (ou menor) que este, será armazenado como float, porque excede o limite de um inteiro.

Outra coisa importante a saber é que mesmo se 4 * 2,5 for 10, o resultado é armazenado como float,
 porque um dos operandos é um float (2,5).

Aqui estão algumas regras para inteiros:

Um número inteiro deve ter pelo menos um dígito
Um número inteiro não deve ter uma vírgula decimal
Um número inteiro pode ser positivo ou negativo
Os inteiros podem ser especificados em três formatos: decimal (baseado em 10), 
hexadecimal (baseado em 16 - prefixado com 0x) ou octal (baseado em 8 - prefixado com 0)


$x = 4983;
var_dump (is_int ($x));

echo "<br>";

$x = 56.12;
var_dump(is_int($x));

echo "<br>";
$x = 10.12;
var_dump(is_float($x));





$x = acos(8);
var_dump($x);



$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
*/

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";


$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;




?>
</body>
</html>