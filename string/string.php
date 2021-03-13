<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> String</h1>
<h2>Eles são sequências de caracteres, como "Seja um profissional Proativo"</h2>
    <?php
    //echo strlen('ola, mundo'); Retorna o comprimento de uma string


   // echo str_word_count("Olá, Mundo!") Contar palavras em uma string

   //echo strrev("Ola, Mundo"); Reverter uma string

   //echo strpos("Ola; Mundo", "Mundo"); Pesquisar um texto dentro de uma string


   //echo str_replace("mundo", "Belmiro", "ola mundo"); Substituir texto dentro de uma string

   $nome = "Belmiro";
   $literal =  'minha $nome não sera lida';

   echo ($literal);
   print ("<br>");
    
   $literal = "Meu nome  e $nome ";
   echo ( $literal);

   print ("<br>");
   print ("<br>");

   $srting1 = "ola mundo";
   $string2 = "123";

   echo  $srting1 .  "" . $string2;
  

  



    
    ?>
</body>
</html>