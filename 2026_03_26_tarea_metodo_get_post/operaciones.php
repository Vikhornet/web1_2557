<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones Matemáticas</title>
</head>
<body>
    <h2>Operaciones Matemáticas Básicas</h2>
    <form method="post" action="">
        <label>Número 1:</label>
        <input type="number" name="num1" required><br><br>
        <label>Número 2:</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if(isset($_POST['num1']) && isset($_POST['num2'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<p>Suma: " . ($num1 + $num2) . "</p>";
        echo "<p>Resta: " . ($num1 - $num2) . "</p>";
        echo "<p>Multiplicación: " . ($num1 * $num2) . "</p>";

        if($num2 != 0){
            echo "<p>División: " . ($num1 / $num2) . "</p>";
            echo "<p>Módulo: " . ($num1 % $num2) . "</p>";
        } else {
            echo "<p>No se puede dividir entre cero</p>";
        }
    }
    ?>
</body>
</html>