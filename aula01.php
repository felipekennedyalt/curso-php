<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $idade = 40;
    $nome = (int)"felipe";//converte para int, mas não é int então vai aparecer 0
    $nome = (int)"100felipe";//converte para int, vai pegar o primeiro número que aparece, mas só se tiver no começo da string, se tiver no final não funciona
    $nome = "felipe";
    
        $texto = "$nome tem $idade anos.<br>";
        echo $nome." tem ".$idade." anos.<br>";
        echo "$nome tem $idade anos.<br>";
        echo '$nome tem $idade anos.<br>';

    ?>
</body>

</html>