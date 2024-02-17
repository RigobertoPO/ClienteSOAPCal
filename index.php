<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente SOAP</title>
</head>
<body>
    <h1>Calculadora utilizando WS SOAP</h1>
    <form action="calcular.php" method="post">
        Número 1: <input type="number" name="numero1"><br>
        Número 2: <input type="number" name="numero2"><br>
        Operación a realizar:
        <select name="operacion" id="">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>           
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>