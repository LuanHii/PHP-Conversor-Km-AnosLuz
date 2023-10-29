<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Anos-luz e Quilômetros</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="item-container">
    <h1>Conversor de Anos-luz e Quilômetros</h1>
    <div class="item">


    
        

        <div class="anos-luz">
            <h2>Anos-luz para Quilômetros</h2>
            <form method="post">
                <input type="number" name="anos-luz" placeholder="Insira anos-luz" required>
                <input type="submit" value="Converter">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["anos-luz"])) {
                $anos_luz = $_POST["anos-luz"];
                if ($anos_luz >= 1) {
                    $quilometros = $anos_luz * 9.461 * pow(10, 12);
                    echo "<p>$anos_luz anos-luz é aproximadamente $quilometros quilômetros.</p>";
                } else {
                    echo "<script>alert('O valor deve ser maior ou igual a 1.');</script>";
                }
            }
            ?>
        </div>

        <div class="Km">
            <h2>Quilômetros para Anos-luz</h2>
            <form method="post">
                <input type="number" name="quilometros" placeholder="Insira quilômetros" required>
                <input type="submit" value="Converter">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["quilometros"])) {
                $quilometros = $_POST["quilometros"];
                if ($quilometros >= 1) {
                    $anos_luz = $quilometros / (9.461 * pow(10, 12));
                    echo "<p>$quilometros quilômetros é aproximadamente $anos_luz anos-luz.</p>";
                } else {
                    echo "<script>alert('O valor deve ser maior ou igual a 1.');</script>";
                }
            }
            ?>
        </div>
    </div>

</div>

</body>

</html>
