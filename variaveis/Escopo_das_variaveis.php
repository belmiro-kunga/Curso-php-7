<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variáveis PHP</h1>
    <h2>Escopo das Variáveis ​​PHP</h2>

    <?php
/*
    $x = 5;

    function myTest(){
        $x = 10;
        echo "<p> O valor da variavel x e : $x  </p>";
    }
    myTest();

    echo "<p> O valor da variavel x e: $x  </p>";



    */
/*
    $x = 5;
    $y = 10;

    function myTest(){
     global $x, $y;
     $y = $x + $y;

    }

    myTest(); //executar a função
    echo $y; //produzir o novo valor para a variavel $y
*/


/*
    $x = 5;
    $y = 10;

    function myTest(){
     $GLOBALS ['y'] = $GLOBALS['x'] + $GLOBALS  ['y'];

    }
    myTest(); 
    echo $y; //valor de saída 15
    */

function myTest(){
    static $x = 0;
    echo $x;
    $x--;

}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();

    ?>
</body>
</html>