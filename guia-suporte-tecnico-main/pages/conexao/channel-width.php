<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../../resources/images/even-logo.png">
  <title>Channel Width - Even</title>
  <link rel="stylesheet" href="../../resources/css/default.css">
</head>
  <body>

    <nav>
      <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>

    <main>

      <h1 class="title">Channel Width (20/40/80/160Mhz)</h1>

      <article>
        <p>O Channel Width (ou “Largura de canal”) determina como o próprio nome diz, a largura de dados transmitidos em uma frequência. Quanto maior a largura, mais dados podem trafegar. Todavia, quanto maior a quantidade de roteadores na mesma largura, mais congestiona-se uma faixa específica.Pense nisso como uma rodovia. Se a estrada for larga, mais tráfego (dados) pode trafegar por ela. No entanto, quanto mais veículos (roteadores) nele, mais congestionado o tráfego fica. Observe a imagem abaixo de exemplificação:</p>
        <img src="../../resources/images/channel-width-1.png" alt="QoS" id="article-img" style="width: 700px;">
        <img src="../../resources/images/channel-width-2.png" alt="QoS" id="article-img" style="width: 700px;">
        <p>“Então se são 2 canais, seria melhor que apenas um de 20Mhz, correto?” Sim, mas só teoricamente.<br><br>
          É de fato melhor, mas isto não é verdade se os 2 canais estiverem congestionados. Um único canal de 20Mhz é o recomendado para “áreas congestionadas” e com bastante interferência. <br><br>
          Isso significa que, embora um canal de 40 MHz permita uma transferência mais rápida e velocidades mais altas, ele tem um desempenho ruim em áreas congestionadas.</p>
          <h2 class="subtitle">Quando usar 20Mhz, 40Mhz ou 80Mhz na rede <span class="emphasis">2.4Ghz</span>?</h2>
          <p>A resposta é simples: quando você está usando 2,4 GHz, 20 MHz é a melhor opção para 2,4 GHz. Na maioria das vezes, usar larguras largas em 2,4 GHz não é vantajoso.<br><br>
          As vantagens de largura de banda provavelmente superarão a perda de desempenho associada à interferência em canais sobrepostos. Áreas remotas com menos conexões Wi-Fi ou dispositivos podem ser uma exceção a essa regra.<br><br>
          Se você precisar de uma taxa de transferência de dados mais rápida, use 40 ou 80 MHz. No entanto, mesmo pouco tráfego em tal rede provavelmente causará congestionamento. Isso ocorre porque você não tem canais não sobrepostos suficientes para trabalhar.  
          <em>Como resultado, é mais provável que você encontre interferência no canal.</em></p>
          <h2 class="subtitle">Quando usar 20Mhz, 40Mhz, 80Mhz ou 160Mhz na rede <span class="emphasis">5Ghz</span>?</h2>
          <p>A resposta é simples: quando você está usando 2,4 GHz, 20 MHz é a melhor opção para 2,4 GHz. Na maioria das vezes, usar larguras largas em 2,4 GHz não é vantajoso.<br><br>
          As vantagens de largura de banda provavelmente superarão a perda de desempenho associada à interferência em canais sobrepostos. Áreas remotas com menos conexões Wi-Fi ou dispositivos podem ser uma exceção a essa regra.<br><br>
          Se você precisar de uma taxa de transferência de dados mais rápida, use 40 ou 80 MHz. No entanto, mesmo pouco tráfego em tal rede provavelmente causará congestionamento. Isso ocorre porque você não tem canais não sobrepostos suficientes para trabalhar.  
          <em>Como resultado, é mais provável que você encontre interferência no canal.</em></p>
      </article>

    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <script src="../resources/js/main.js"></script>
    <a href="../conexao/configuracoes.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>