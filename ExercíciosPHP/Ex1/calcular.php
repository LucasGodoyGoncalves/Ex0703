<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Maior Número</title>
    </head>

    <body>
<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
   
    if($n1 > $n2)
    {
        echo "O $n1 é maior que o $n2";
    }

    else if($n2 > $n1)
    {
        echo "O $n2 é maior que o $n1";
    }

    else
    {
        echo "Os dois números são iguais";
    }
?>       
    </body>
</html>