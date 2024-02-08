<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sugestao = $_POST["sugestao"];
    
    // Aqui você pode salvar as sugestões em um arquivo, banco de dados ou enviá-las por e-mail, dependendo das suas necessidades.
    
    // Redirecione os usuários de volta para a página de sugestões após o envio.
    header("Location: sugestoes.html");
    exit();
}
?>
    