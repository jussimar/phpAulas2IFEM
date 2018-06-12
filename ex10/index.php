<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex 10 listas</title>
</head>
<body>
    <form method="post" action="resp.php">
        <select name="op">
            <option value="1">Somar</option>
            <option value="2">Subtração</option>
            <option value="3">Multiplicacao</option>
            <option value="4">Divisao</option>
        </select>
        <br>
        <label for="">Valor 1</label>
        <input type="number" name="valor1"/>
        <br>
        <label for="">Valor 2</label>
        <input type="number" name="valor2"/>
        <br>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>