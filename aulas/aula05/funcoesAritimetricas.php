<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$v1 = $_GET["x"];
$v2 = $_GET["y"];
echo "<h3>Valores recebidos: $v1 e $v2</h3>";
echo "Valor absoluto de $v2: ". abs($v2); //valor absoluto é eliminar o sinal negativo
echo "<br>O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);//elevado
echo "<br>A raiz de $v1 é: ". sqrt($v1);//raiz quadrada
echo "<br>O valor de $v2 arredondado é:". round($v2);//arredondamento, tambem ém o ceil e o floor, o primeiro arredonda pra cima e o segundo pra baixo.
echo "<br>A parte inteira de $v2 é: ". intval($v2);//pega a parte inteira do número
echo "<br>O valor de $v1 em R$". number_format($v1,2,",",".")
    ?>
</body>
</html>