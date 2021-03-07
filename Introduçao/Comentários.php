<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Comentários PHP</h1>
    <?php
    
    // Comentaio de uma unica linha

    # Comentaio de uma unica linha
/*
 echo "este e um comentario de multiplas linhas <br>";
 echo "este e um comentario de multiplas linhas <br>";
 echo "este e um comentario de multiplas linhas <br>";
 echo "este e um comentario de multiplas linhas <br>";
 echo "este e um comentario de multiplas linhas <br>";

 */

 // Você também pode usar comentários para omitir partes de uma linha de código
$x = 5 /* + 15 */ + 5;
echo $x;
    ?>
</body>
</html>