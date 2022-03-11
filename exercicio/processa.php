<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <style>

    body{
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(93,60,154,1) 48%, rgba(0,212,255,1) 100%);
        color: #f8f8f8;
        font-weight: bold;
        font-size: 1em;
        font-family: arial;
    }
       
    </style>

</head>
<body>

<?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $num3 = $_REQUEST['num3'];

    $soma = $num1 + $num2 + $num3;
    
    $media = $soma /3;

    echo "<p> A média é: $media </p>";
    //echo "A soma é: ".$soma;


?>

</body>
</html>








