<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste HTTP</title>
</head>
<!-- html 5 -->
<body>
     <!-- echo "Meu nome é ", $_GET["nome"], " e tenho ", $_GET["idade"], "!"; -->
   <?php
   
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  $ope = $_GET["ope"];

  if ($ope == " ") {
    $soma = $num1 + $num2;
    echo "A soma é ", $soma;
  } else if ($ope == "-") {
    $sub = $num1 - $num2;
    echo "A subtração é ", $sub;
  } else if ($ope == "*") {
   $multi = $num1 * $num2;
   echo "A multiplicação é ", $multi;
  } else {
    $div = $num1 / $num2;
    echo "A divisão é ", $div;
  }


   ?>
</body>
</html>