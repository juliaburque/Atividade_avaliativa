<!DOCTYPE html>
<html>
<head>
    <title>Verificar se o número é positivo, negativo ou neutro</title>
</head>
<body>
    <h2>Verificar se o número é positivo, negativo ou neutro</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Insira um número: <input type="number" name="numero">
        <input type="submit" name="submit" value="Verificar">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo 'numero' está definido e não vazio
        if (isset($_POST["numero"]) && !empty($_POST["numero"])) {
            // Obtém o número enviado pelo formulário
            $numero = $_POST["numero"];

            // Verifica se o número é positivo, negativo ou neutro
            if ($numero > 0) {
                echo "O número $numero é positivo.";
            } elseif ($numero < 0) {
                echo "O número $numero é negativo.";
            } else {
                echo "O número $numero é neutro (zero).";
            }
        }else {
            echo "Por favor, insira um número.";
        }
    ?>
</body>
</html>