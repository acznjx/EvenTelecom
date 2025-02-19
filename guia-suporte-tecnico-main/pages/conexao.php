<?php
session_start();
session_destroy();
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
  <title>Even Telecom - Sup. Técnico</title>
  <link rel="stylesheet" href="../resources/css/index.css">
  <link rel="stylesheet" href="../resources/css/default.css">
</head>
  <body>
    <nav>
        <img src="../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>
    <main>

      <h1 class="main-title">Guia geral sobre Conexão</h1>

      <section id="cards">
        <a href="./conexao/configuracoes.php">
          <div id="card" class="card1">
            <h1>Configurações</h1>
            <img src="../resources/images/configuracoes.jpg" alt="Configurações">
          </div>
        </a>
        <a href="./conexao/desconexao.php">
          <div id="card" class="card2">
            <h1>Desconexão</h1>
            <img src="../resources/images/desconexao.jpg" alt="Desconexão">
          </div>
        </a>
        <a href="./conexao/acessos.php">
          <div id="card" class="card3">
            <h1>Acesso aos roteadores</h1>
            <img src="../resources/images/acessos.jpg" alt="Acessos">
          </div>
        </a>
        <a href="./conexao/equipamentos.php">
          <div id="card" class="card3">
            <h1>Equipamentos por plano</h1>
            <img src="../resources/images/equipamentos.jpg" alt="Equipamentos">
          </div>
        </a>
      </section>
    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <a href="../home.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>