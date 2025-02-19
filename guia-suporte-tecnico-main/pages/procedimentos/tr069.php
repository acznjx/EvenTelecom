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
  <title>TR069 - Even</title>
  <link rel="stylesheet" href="../../resources/css/default.css">
</head>
  <body>
    <nav>
      <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>
    <main>

      <article class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/baRMjL6Rs9Q?si=ZhLEE-W2xbNGk0Dq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </article>
      
    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <script src="../resources/js/main.js"></script>
    <a href="../procedimentos.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>