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
$ano = $_GET["an"];
$idade = 2021 - $ano;
echo "Quem nasceu em $ano tem idade igual a $idade anos.";
    ?>
</body>
</html>