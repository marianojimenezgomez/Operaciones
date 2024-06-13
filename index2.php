<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora Básica</h1>
        <h2>Nombre: Maríano Jiménez Gómez</h2>
        <h3>Grado: 9 Grupo: A</h3>
        <form method="post" action="">ccc
            <input type="number" name="num1" required placeholder="Número 1">
            <select name="operation" required>
                <option value="add">Sumar</option>
                <option value="subtract">Restar</option>
            </select>
            <input type="number" name="num2" required placeholder="Número 2">
            <button type="submit" name="calculate">Calcular</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = '';

            if ($operation == 'add') {
                $result = $num1 * $num2;
            } elseif ($operation == 'subtract') {
                $result = $num1 / $num2;
            }

            echo "<h2>Resultado: $result</h2>";
        }
        ?>
    </div>
</body>
</html>