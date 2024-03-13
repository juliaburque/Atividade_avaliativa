<!DOCTYPE html>
<html>
<head>
    <title>Verificar se o número é par ou ímpar</title>
</head>
<body>
    <h2>Verificar se o número é par ou ímpar</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Insira um número: <input type="text" name="numero">
        <input type="submit" name="submit" value="Verificar">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo 'numero' está definido e não vazio
        if (isset($_POST["numero"]) && !empty($_POST["numero"])) {
            // Obtém o número enviado pelo formulário
            $numero = $_POST["numero"];

            // Verifica se o número é um número inteiro
            if (is_numeric($numero)) {
                // Verifica se o número é par ou ímpar e exibe o resultado
                if ($numero % 2 == 0) {
                    echo "O número $numero é PAR.";
                } else {
                    echo "O número $numero é ÍMPAR.";
                }
            } else {
                echo "Por favor, insira um número válido.";
            }
        } else {
            echo "Por favor, insira um número.";
        }
    }
    ?>
</body>
</html>