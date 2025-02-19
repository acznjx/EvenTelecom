<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../../resources/images/even-logo.png">
  <title>DNS - Even</title>
  <link rel="stylesheet" href="../../resources/css/default.css">
</head>
  <body>
    <nav>
      <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>
    <main>

      <h1 class="title">DNS (Domain Name System)</h1>

      <article>
        <p>Com sua sigla significando “Domain Name System” (sistema de nome(s) de domínio), o DNS impacta diretamente no acesso do cliente à sites, visto que é o protocolo que “traduz” os nomes dos sites em endereços IP. Caso o cliente não consiga navegar em um site em específico ou apresente lentidão ao carregar o site, uma boa tentativa seria mudar o DNS do equipamento do mesmo para verificar se haverão melhoras.</p>
        <div class="img-container">
          <img src="../../resources/images/DNS1.png" alt="DNS" id="article-img">
          <p>Imagem demonstrando como um site fica inacessível por conta de problemas com DNS</p>
        </div>
        <div class="img-container">
          <img src="../../resources/images/DNS2.png" alt="DNS" id="article-img">
          <p>Explicação de como é o funcionamento do DNS</p>
        </div>
        <h2 class="subtitle">Utilizamos principalmente os seguintes DNS:</h2>
        <div class="column-container">
          <div class="dns-even">
            <h3 class="dns-title">DNS da Even IPV4:</h3>
            <p><strong>Primário:</strong> 45.5.44.250<br>
            <strong>Secundário:</strong> 45.5.44.249</p>
            <h3 class="dns-title"><br>DNS da Even IPV6:</h3>
            <p><strong>Primário:</strong> 2804:3ac0:10:2::2<br>
            <strong>Secundário:</strong> 2804:3ac0:10:2::3</p>
          </div>
          <div class="dns-google">
            <h3 class="dns-title">DNS do Google + Even:</h3>
            <p><strong>Primário:</strong> 8.8.8.8<br>
            <strong>Secundário:</strong> 45.5.44.250</p>
            <h3 class="dns-title"><br>DNS do Google IPV6:</h3>
            <p><strong>Primário:</strong> 2001:4860:4860::8888<br>
            <strong>Secundário:</strong> 2001:4860:4860::8844</p>
          </div>
        </div>
      </article>
    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <script src="../resources/js/main.js"></script>
    <a href="../conexao/configuracoes.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>