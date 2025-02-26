<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <form method="post" action="calcular.php">
    <p>
        <label for="num1">número 1 </label>
        <input type="number" id="num1" name="num1">
</p>
    <p>
        <label for="num2">número 2 </label>
        <input type="number" id="num2" name="num2">
</p>
    <p>
    <label for="ope">Operação</label>
    <select id="ope" name="ope">
        <option value=" ">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
</p>
    <p>
        <button type="submit">calcular</button>
</p>
   
    </form>
</body>
</html>