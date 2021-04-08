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
$x = "abc";// o valor da variavel (abc) vira a nova variavel, recebendo o valor (def)
$$x = "def";
echo "O valor da variavel X é $x <br>";
echo "A variavel ABC criada recebeu o valor $abc"
    ?>
</body>
</html>