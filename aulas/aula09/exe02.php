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
$ano = isset($_GET["ano"]) ? $_GET["ano"]:"1900";
$i = date("Y") - $ano;
echo "você nasceu em $ano e tem $i anos<br>";
if($i >= 18){
    $votar = "ja pode votar!";
    $dirigir = "ja pode dirigir!";
}else{
    $votar = "não pode votar!";
    $dirigir = "não pode dirigir!";
}


echo "com essa idade você $votar e $dirigir";
    ?>
</body>
</html>