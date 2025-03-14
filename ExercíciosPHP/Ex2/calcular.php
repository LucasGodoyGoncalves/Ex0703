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
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
   
    $total = ($n1 + $n2 + $n3 + $n4) / 4;

    if($total > 5 )
    {
        echo "Aprovado =)";
    }

    else 
    {
        echo "Reprovado =( ";
    }

?>       
    </body>
</html>