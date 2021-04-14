<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$valor = $_GET["v"];

$rq = sqrt($valor);
echo "O valor enviado foi <strong>$valor</strong>, e a raiz quadrada dele é: ". number_format($rq,2);
    ?>
    <br>
    <a href="exe01.html">Voltar</a>
</body>
</html>