<!DOCTYPE html>
<html>
<head>
    <title>Verificar se um número é Redondo</title>
</head>
<body>
    <h2>Verificar se um número é Redondo</h2>
    <form method="post" action="">
        Digite um número: <input type="text" name="numero">
        <input type="submit" name="submit" value="Verificar">
    </form>
    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número digitado pelo usuário
        $numero = $_POST['numero'];
        
        // Verifica se o número é válido
        if (is_numeric($numero)) {
            // Verifica se o número é redondo ou não
            if ($numero % 10 == 0) {
                echo "<p>O número $numero é redondo.</p>";
            } else {
                echo "<p>O número $numero não é redondo.</p>";
            }
        } else {
            echo "<p>Por favor, digite um número válido.</p>";
        }
    }
    ?>
</body>
</html>