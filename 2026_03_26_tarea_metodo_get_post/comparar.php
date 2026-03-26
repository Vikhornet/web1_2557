<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comparar dos números</title>
</head>
<body>
    <h2>Comparar dos números</h2>
    <form method="get" action="">
        <label>Número 1:</label>
        <input type="number" name="num1" required><br><br>
        <label>Número 2:</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" value="Comparar">
    </form>

    <?php
    if(isset($_GET['num1']) && isset($_GET['num2'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        if($num1 > $num2){
            echo "<p>El número $num1 es mayor que $num2</p>";
        } elseif($num1 < $num2){
            echo "<p>El número $num2 es mayor que $num1</p>";
        } else {
            echo "<p>Los números son iguales</p>";
        }
    }
    ?>
</body>
</html>