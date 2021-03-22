<?php
/*
É assim que funciona: Primeiro temos uma única expressão n (na maioria das 
vezes uma variável), que é avaliada uma vez. O valor da expressão é então 
comparado com os valores para cada caso na estrutura. Se houver correspondência,
 o bloco de código associado a esse caso será executado. Use para evitar que o 
 código seja executado automaticamente na próxima caixa. A declaração é usada
  se nenhuma correspondência for encontrada.breakdefault
*/


$corfavorita = "vermelho";

switch ($corfavorita ){

    case "vermelhoo";
        echo "sua cor favorita é vermelho";
    break;
    case "Azul";
        echo ("A sua cor favorita é Azul");
    break;

case "Verde";
    echo "sua cor favorita é verde";
default:
echo "Sua cor favorita não é vermelho, Azul ou Verde";

}
