<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste HTTP</title>
    <style>

    </style>
</head>
<!-- html 5 -->
<body>
     <!-- echo "Meu nome é ", $_GET["nome"], " e tenho ", $_GET["idade"], "!"; -->
   <?php
   
if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["ope"])){
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $ope = $_POST["ope"];
  $result = 0;

  if ($ope == " ") {
    $result = $num1 + $num2;
  } else if ($ope == "-") {
    $result = $num1 - $num2;
  } else if ($ope == "*") {
   $result = $num1 * $num2;
  } else if  ($ope == "/"){
    $result = $num1 / $num2;
  } else{
     $result = "nan";
  }

  if ($result != "nan"){
    echo "O resultado da operação é ", $result, "!";
  } else {
     echo "erro causado por falta de sinal";
  }
}else {
 echo "Parametros não foram informados!";
}

   ?>
</body>
</html>