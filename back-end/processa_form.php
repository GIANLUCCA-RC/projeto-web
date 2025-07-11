<?php
if (isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    echo '<h1>Dados do Usuário</h1>';
    echo '<hr>';
    echo "<p>O usuário $nome tem $idade anos.</p>";
} else {
    echo "<h1>Erro</h1><hr>";
    echo "<p style='color:red;'>Os dados não foram recebidos. Por favor, envie o formulário corretamente.</p>";
}
echo '<button type="button" onclick="window.location.href=\'http://localhost/projeto-web/index.html\'">Home Page</button>';
echo '<button type="button" onclick="history.back()">Voltar</button>';
echo '<button type="button" onclick="window.location.href=\'https://www.udesc.br\'">Vai para Udesc</button>';
?>