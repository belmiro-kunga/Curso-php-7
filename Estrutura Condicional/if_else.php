<?php
/*
Chamamos de estruturas condicionais as instruções para testar se uma 
condição é verdadeira ou não. Elas podem ser associadas às estruturas 
que se repetem, após o cumprimento da condição, chamamos a elas de
 estruturas de loop. O conceito de bloco

*/

/*
$t = date("H");

if($t < "11"){

  echo("tenha um bom dia");
}else {
  echo "tenha uma voa noite";
}

*/


$t = date("H");

print "A hora do servidor é " . $t;

echo " e dará a seguinte mensgem ";


if ($t > "10") {
echo "tenha um bom dia";
}elseif($t > "20") {
  echo "tenha boa sorte";
}else {
 print "tenha uma boa noite";
}
