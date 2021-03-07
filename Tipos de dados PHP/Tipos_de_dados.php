<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos de dados PHP</h1>

    <?php

//String PHP
/*
$x = "ola mundo";
$y = 'ola mundo';

print $x;
echo "<br>";
print $y;
*/
//PHP Integer
/*
$x = 234;
var_dump ($x);
*/
//PHP Float
/*
$x = 2.3;
var_dump ($x);

*/

/*
$carro = array ("volvo", "BMW,", "Toyota");
var_dump ($carro);
*/

//Uma classe é um modelo para objetos e um objeto é uma instância de uma classe.
/*
class carro {
    public $cor;
    public $modelo;
    public function __construct($cor, $modelo) {
        $this->cor = $cor;
        $this->modelo = $modelo;
      
      }
      public function message(){
          return "meu carro é" . $this->cor . "" . $this->modelo . "!";
      }
}
$meucarro = new carro(" preto ", " volvo ");
echo $meucarro -> message();
echo " <br> ";
$meucarro = new carro(" vermelho ", " Toyota ");
echo $meucarro -> message();
*/

//Valor PHP NULL
$x = "ola mundo";
$x = null;
var_dump($x);


    ?>
</body>
</html>