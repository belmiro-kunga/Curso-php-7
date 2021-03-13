<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores PHP</title>
</head>
<body>
    <h1>Operadores PHP</h1>
    <?php

/*  ***** Operadores********** */  
//Operadores aritméticos 
//    +  Soma
//   -  Subtração
//    *  Multiplicação
//      /  Divisão
//     %   Módulo
//     **  Exponencial
//peradores de atribuição
//Operadores de comparação
//Operadores de incremento / decremento
//Operadores lógicos
//Operadores de string
//Operadores de matriz
//Operadores de atribuição condicional
/*
$x = 10; //Soma
$y = 9;
echo $x + $y;

print "<br>";

$x = 10; //Subtração
$y = 9;
echo $x - $y;

print "<br>";

$x = 10; //Multiplicação
$y = 9;
echo $x * $y;

print "<br>";

$x = 10; //Divisão
$y = 9;
echo $x / $y;

print "<br>";

$x = 10; //Modulo
$y = 9;
echo $x % $y;

print "<br>";

$x = 10; //Exponencial
$y = 2;
echo $x ** $y;

print "<br>";
 
 print"<h2>Operadores de comparação de PHP</h2>";

$x = 12;
$y = 13;
var_dump($x == $y);
print "<br>";
$x = 12;
$y = 12;
var_dump($x == $y);
*/ 
print"<h2>Operadores de comparação de PHP</h2>";


$x = "10";
$y = 10;
var_dump($x === $y) ;

print "<br>";

$x = 100;  
$y = "100";

var_dump($x != $y);
print "<br>";
$x = 100;  
$y = "100";

var_dump($x <> $y);
print "<br>";
$x = 100;  
$y = "100";

var_dump($x !== $y);
print "<br>";

$x = 100;
$y = 50;

var_dump($x > $y);

print "<br>";
$x = 10;
$y = 50;

var_dump($x < $y);
print "<br>";
$x = 50;
$y = 50;

var_dump($x >= $y);
print "<br>";
$x = 50;
$y = 50;

var_dump($x <= $y);

print "<br>";
$x = 5;  
$y = 10;

echo ($x <=> $y); 
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); 
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y);
print"<h2>Operadores de incremento / decremento de PHP</h2>";
echo "<br>";
$x = 10;  
echo $x--;
echo "<br>";

$x = 10;  
echo --$x;
echo "<br>";
$x = 10;  
echo $x++;
echo "<br>";
$x = 10;  
echo ++$x;
echo "<br>";



print"<h2>Operadores lógicos PHP PHP</h2>";

$x = 100;  

if ($x !== 90) {
    echo "Ola mundo!";
    echo "<br>";
    $x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Ola mundo!";
}
    echo "<br>";
    $x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Ola mundo!";
}
    echo "<br>";

    $x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Ola mundo!";
}
    echo "<br>";

    $x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Ola mundo!";
}
    echo "<br>";

    $x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Ola mundo!";
}
    echo "<br>";

    print"<h2>Operadores de string PHP</h2>";
   
    echo "<br>";

    $txt1 = "Ola mundo";
    $txt2 = " Ola mundo!";
    echo $txt1 . $txt2;
    
    echo "<br>";
    $txt1 = "Ola mundo";
    $txt2 = " Ola mundo!";
    $txt1 .= $txt2;
    echo $txt1;

    print"<h2>Operadores de array PHP</h2>";
    echo "<br>";
    $x = array("a" => "vermelho", "b" => "verde");  
    $y = array("c" => "azul", "d" => "amarelo");  

    var_dump($x !== $y);
    echo "<br>";

    $x = array("a" => "vermelho", "b" => "verde");  
    $y = array("c" => "azul", "d" => "amarelo");  

    var_dump($x <> $y);

    echo "<br>";

    $x = array("a" => "vermelho", "b" => "verde");  
    $y = array("c" => "azul", "d" => "amarelo");  

    var_dump($x != $y);
    echo "<br>";

    $x = array("a" => "vermelho", "b" => "verde");  
    $y = array("c" => "azul", "d" => "amarelo");  

    var_dump($x === $y);
    echo "<br>";

    $x = array("a" => "vermelho", "b" => "verde");  
    $y = array("c" => "azul", "d" => "amarelo");  

    var_dump($x == $y);
    echo "<br>";

    $x = array("a" => "azul", "b" => "verde");  
    $y = array("c" => "azul", "d" => "amarelo");  

    print_r($x + $y);
    echo "<br>";

    print"<h2>Operadores de atribuição condicional de PHP</h2>";
    echo $user = $_GET["user"] ?? "anonymous";

    echo $color = $color ?? "azul";
    echo("<br>");
    
}






































































































































































    ?>

</body>
</html>