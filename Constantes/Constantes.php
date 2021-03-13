<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes PHP</title>
</head>
<body>
    <h1>Constantes em PHP</h1>
<?php

    /*
    Parâmetros:
    define ( "nome", "bvalor");
    nome : especifica o nome da constante
    valor : especifica o valor da constante
    não diferencia maiúsculas de minúsculas : especifica 
    se o nome da constante deve ser indiferente a maiúsculas e minúsculas. O padrão é falso
   
    define ( "saude", "bem-vido a proativa");

    echo saude;


    define("BEMVINDO", "Estas com o prof Belmiro Kunga", true);
    echo bemvindo;


define( "carro", [
    "Alfa Romeu",
    "BMW",
    "Toyota"
]);
echo carro[1];

 */
 define ("saudação", " Bem-vindo ao curso de php da proativa ");

function myfun(){
    echo saudação;
}
myfun();


?>
</body>
</html>