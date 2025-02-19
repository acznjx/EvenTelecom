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
  <title>Contatos - Even</title>
  <link rel="stylesheet" href="../../resources/css/default.css">
  <link rel="stylesheet" href="../../resources/css/conexao.css">
</head>
  <body>

    <nav>
      <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>

    <main>

      <h1 style="text-align: center; margin-top: 5rem; margin-bottom: 1.5rem; color: #ffce65">Equipes:</h1>

      <section class="row">

        <article>
          <h1 style="color: white">Suporte</h1>
          <p><span style="font-weight: 600">Equipe F28:</span> (51) 93505-0455</p>
          <p><span style="font-weight: 600">Equipe F41:</span> (51) 93505-0456</p>
        </article>

        <article>
          <h1 style="color: white">Instalação</h1>
          <p><span style="font-weight: 600">Equipe B02:</span> (51) 93505-0453</p>
          <p><span style="font-weight: 600">Equipe B13:</span> (51) 93505-0454</p>
          <p><span style="font-weight: 600">Equipe A98:</span> (51) 93505-0452</p>
        </article>

        <article>
          <h1 style="color: white">Infraestrutura</h1>
          <p><span style="font-weight: 600">Equipe A87:</span> (51) 93505-0451</p>
        </article>

      </section>

      <h1 style="text-align: center; margin-top: 5rem; margin-bottom: 1.5rem; color: #ffce65">Ramais:</h1>

      <div class="cards-container">

        <section class="ramais-card-container">
          <h1 class="ramais-title">Callcenter</h1>
          <div class="ramais-card">
            <p><span class="ramais-name">Geral:</span> 34</p>
            <p><span class="ramais-name">Supervisor:</span> 302</p>
            <p><span class="ramais-name">Josué Jader:</span> 303</p>
            <p><span class="ramais-name">Luan Tavares:</span> 304</p>
            <p><span class="ramais-name">Franciane Rocha:</span> 305</p>
            <p><span class="ramais-name">Ana Carolina:</span> 306</p>
            <p><span class="ramais-name">Anthony Trindade/Matheus:</span> 307</p>
            <p><span class="ramais-name">João Gabriel:</span> 308</p>
          </div>
        </section>

        <section class="ramais-card-container">
          <h1 class="ramais-title">Financeiro</h1>
          <div class="ramais-card">
            <p><span class="ramais-name">Geral:</span> 33</p>
            <p><span class="ramais-name">Cassia Carbonel:</span> 313</p>
            <p><span class="ramais-name">Luyze:</span> 314</p>
            <p><span class="ramais-name">Thayse:</span> 315</p>
            <p><span class="ramais-name">Luisa:</span> 316</p>
          </div>
        </section>

        <section class="ramais-card-container">
          <h1 class="ramais-title">Comercial</h1>
          <div class="ramais-card">
            <p><span class="ramais-name">Geral:</span> 31</p>
            <p><span class="ramais-name">Alessandra:</span> 300</p>
            <p><span class="ramais-name">Gabriel Pacheco:</span> 301</p>
            <p><span class="ramais-name">Veridiana Pacheco:</span> 311</p>
            <p><span class="ramais-name">Bruno (Marketing):</span> 312</p>
          </div>
        </section>

        <section class="ramais-card-container">
          <h1 class="ramais-title">Estoque</h1>
          <div class="ramais-card">
            <p><span class="ramais-name">Vinicius Lessa:</span> 320</p>
            <p><span class="ramais-name">Jaime Cabral:</span> 320</p>
          </div>
        </section>

        <section class="ramais-card-container">
          <h1 class="ramais-title">Projeto</h1>
          <div class="ramais-card">
            <p><span class="ramais-name">Régis (Infraestrutura):</span> 317</p>
            <p><span class="ramais-name">André (Operacional):</span> 318</p>
          </div>
        </section>

        <section class="ramais-card-container">
          <h1 class="ramais-title">Gerência</h1>
          <div class="ramais-card">
            <p><span class="ramais-name">Giovane (Diretor):</span> 401</p>
            <p><span class="ramais-name">Saulo (Diretor):</span> 402</p>
            <p><span class="ramais-name">Guilherme (Gerente-geral):</span> 404</p>
          </div>
        </section>
      </div>

    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <script src="../../resources/js/main.js"></script>
    <a href="../contatos-avisos.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>