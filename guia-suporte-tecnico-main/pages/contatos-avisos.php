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
  <link rel="icon" type="image/x-icon" href="../resources/images/even-logo.png">
  <title>Contatos/O.S - Even</title>
  <link rel="stylesheet" href="../resources/css/default.css">
  <link rel="stylesheet" href="../resources/css/index.css">
</head>
  <body>
    <nav>
      <img src="../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>
    <main>

      <h1 class="main-title">Contatos/O.S</h1>

      <section id="cards" style="display: flex; justify-content: center">
        <a href="../pages/contatos/contatos-even.php">
          <div id="card" style="margin: 2.5rem;" class="card2">
            <h1>Contatos</h1>
            <img src="../resources/images/procedimentos.jpg" alt="Procedimentos">
          </div>
        </a>
        <a href="../pages/contatos/avisos.php">
          <div id="card" style="margin: 2.5rem;" class="card3">
            <h1>Avisos</h1>
            <img src="../resources/images/contatos.jpg" alt="avisos">
          </div>
        </a>
      </section>
    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <script src="../resources/js/main.js"></script>
    <a href="../home.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>