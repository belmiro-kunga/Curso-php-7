<?php
//Declarações Condicionais PHP if, else, elseif.

/*$t = date("H");
if ($t < "20"){

    echo "tenha um bom dia!";
}

$t = date("H");
if ($t < "14"){

    echo "tenha um bom dia!";
} else {
    echo "tenha uma boa noite";
}
*/
/***********************Problema *************
Saída "Tenha um bom dia!" se o tempo atual for inferior a 10, e 
"Tenha um bom dia!" se o tempo atual for menor que 
20. Caso contrário, ele vai produzir "Tenha uma boa noite!":

$t = date("H");
  if ($t < "10"){

    echo "tenha um bom dia";

   }else ($t > "20"){
       echo "tenha uma dia";
   }else {
       echo "tenha uma boa noite";
   }

*/
   $t = date("H");
   echo " <p>Esta é a hora do servidor " . $t; 
   
   echo "segurei esta msn: </p>";
   
   if ($t < "10") { 
     echo "Bom dia!";
   } elseif ($t < "20") {
     echo "Tenha um boa dia";
   } else {
     echo "Tenha uma boa note!";
   }

?>