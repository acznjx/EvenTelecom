<?php
session_start();

// Se o usuário já estiver logado, redirecione para a página principal
if (isset($_SESSION['loggedin'])) {
    header("Location: home.php");
    exit;
}

// Verifica se há uma mensagem de erro
$error = isset($_GET['error']) ? "Usuário ou senha inválidos!" : "";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Even Telecom</title>
    <link rel="stylesheet" href="./resources/css/default.css">
    <link rel="stylesheet" href="./resources/css/index.css">
    <style>
        /* Estilo para a mensagem de erro no canto inferior direito */
        .error-message {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ff4444; /* Vermelho */
            color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: <?php echo $error ? 'block' : 'none'; ?>; /* Exibe apenas se houver erro */
            animation: fadeIn 0.5s ease-in-out; /* Animação de fade-in */
        }

        /* Animação de fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <nav>
        <img src="./resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>
    <div class="login-container">
        <form action="login.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
    </div>

    <!-- Mensagem de erro no canto inferior direito -->
    <?php if ($error): ?>
        <div class="error-message" id="errorMessage">
            <?php echo $error; ?>
        </div>

        <!-- Script para remover a mensagem após 15 segundos -->
        <script>
            // Seleciona a mensagem de erro
            const errorMessage = document.getElementById('errorMessage');

            // Define um tempo de 15 segundos (15000 milissegundos)
            setTimeout(() => {
                errorMessage.style.display = 'none'; // Oculta a mensagem
            }, 5000); // 15 segundos
        </script>
    <?php endif; ?>
</body>
</html>