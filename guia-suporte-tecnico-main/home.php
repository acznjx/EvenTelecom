<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php"); // Redireciona para a página de login
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./resources/images/even-logo.png">
    <title>Even Telecom - Sup. Técnico</title>
    <link rel="stylesheet" href="./resources/css/index.css">
    <link rel="stylesheet" href="./resources/css/default.css">
    <style>
        /* Estilo para o botão "Sair" */
        .logout {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .logout a {
            background-color: #dc3545; /* Vermelho */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .logout a:hover {
            background-color: #c82333; /* Vermelho mais escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <nav>
        <img src="./resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>
    <main>
        <h1 class="main-title">Guia - Suporte Técnico</h1>

        <section id="cards">
            <a href="pages/conexao.php">
                <div id="card" class="card1">
                    <h1>Conexão</h1>
                    <img src="./resources/images/guide.jpg" alt="Guia">
                </div>
            </a>
            <a href="pages/procedimentos.php">
                <div id="card" class="card2">
                    <h1>Procedimentos</h1>
                    <img src="./resources/images/procedimentos.jpg" alt="Procedimentos">
                </div>
            </a>
            <a href="pages/contatos-avisos.php">
                <div id="card" class="card3">
                    <h1>Contatos e Avisos</h1>
                    <img src="./resources/images/contatos.jpg" alt="contatos-avisos">
                </div>
            </a>
        </section>
    </main>

    <!-- Botão "Sair" na parte inferior direita -->
    <div class="logout">
        <a href="logout.php">Sair</a>
    </div>

    <footer>
        <p>Feito com carinho por João Abreu e Ana Carolina 😃</p>
    </footer>
</body>
</html>