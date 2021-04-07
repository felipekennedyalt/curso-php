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

    //pra passar os parametrtos pelo get, a URL tem que ficar assim:
    //http://localhost/curso-php/aulas/aula05/operadores.php?a=3&b=10
    //você adiciona os parâmetros dessa forma na URL quando usar o GET: ?a=3&b=10
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h3>Valores recebidos: $n1 e $n2</h3>";
    $soma = $n1 + $n2;
    echo "A soma dos números vale ". ($n1 + $n2);
    echo "<br/>A subtração dos números vale ". ($n1 - $n2);
    echo "<br/>A multiplicação dos números vale ". ($n1 * $n2);
    echo "<br/>A divisão dos números vale ". ($n1 / $n2);
    echo "<br/>o modulo dos números vale ". ($n1 % $n2);// resto da dvivisão


    
    ?>
</body>
</html>