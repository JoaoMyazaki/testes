<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valide os dados do formulário aqui
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmar_senha'];

    if ($senha !== $confirmarSenha) {
        header("Location: index.html"); // Redireciona de volta para a página inicial
    } else {
        // Processamento bem-sucedido, redireciona para a página inicial com a mensagem
        header("Location: index.html?sucesso=cadastro");
    }
}
?>
