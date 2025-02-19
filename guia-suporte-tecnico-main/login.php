<?php
session_start();

// Exemplo de usuário e senha fictício
$valid_username = "admin";
$valid_password = "admin"; // Em um ambiente real, use password_hash() e password_verify()

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pegue os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifique se as credenciais são válidas
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username; // Armazena o nome do usuário na sessão
        // Redireciona para a página home.php
        header("Location: home.php");
        exit;
    } else {
        // Se as credenciais estiverem incorretas, redirecione de volta para a página de login com uma mensagem de erro
        header("Location: index.php?error=1");
        exit;
    }
} else {
    // Se o formulário não foi enviado, redirecione para a página de login
    header("Location: index.php");
    exit;
}
?>