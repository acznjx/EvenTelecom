<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header("Location: /even-suporte-tecnico/login.html");
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
  <link rel="icon" type="image/x-icon" href="../../resources/images/even-logo.png">
  <title>Ativação Mesh - Even</title>
  <link rel="stylesheet" href="../../resources/css/default.css">
  <link rel="stylesheet" href="../../resources/css/index.css">
</head>
  <body>
    <nav>
      <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>
    <main>
      <h1 style="text-align: center;">Pagina em construção 🚧🛠️</h1>
    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <script src="../resources/js/main.js"></script>
    <a href="../../pages/procedimentos.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>