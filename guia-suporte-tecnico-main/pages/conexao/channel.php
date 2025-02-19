<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../../resources/images/even-logo.png">
  <title>Canais - Even</title>
  <link rel="stylesheet" href="../../resources/css/default.css">
</head>
  <body>

    <nav>
      <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>

    <main>

      <h1 class="title">Canais de frequência (Channel)</h1>

      <article>
        <div class="column-container">
          <div>
            <p><strong class="emphasis">Canais 2.4Ghz que usamos:</strong></p>
            <p>6 ao 9</p>
          </div>
          <div>
            <p><strong class="emphasis">Canais 5Ghz que usamos:</strong></p>
            <p style="margin-bottom: 2rem">36 ao 44</p>
          </div>
        </div>
        <p>Os canais de frequência wi-fi afetam fortemente a conexão sem fio do cliente, fazendo-o ter pequenas quedas por conta da sobreposição de redes vizinhas no mesmo canal de sua rede. Uma breve explicação de como funciona abaixo:</p>
        <img src="../../resources/images/channel1.png" alt="Channel explanation" id="article-img">
        <p>Há modelos de modem que provisionam um diagnóstico de como estão as redes vizinhas do equipamento, chamado geralmente de “Neighbor AP Information”, tanto para redes 2.4ghz quanto 5ghz. Como acessar essa configuração? É bem simples, siga o passo-a-passo abaixo (em dispositivos Huawei atualizados, caso seja em outro equipamento o processo é bem parecido):</p>
        <div class="neighbor-ap-tutorial">
          <img src="../../resources/images/channel2.png" alt="Channel explanation" id="article-img" style="width: 450px;" class="neighbor-ap-img">
          <img src="../../resources/images/channel3.png" alt="Channel explanation" id="article-img" style="width: 450px;" class="neighbor-ap-img">
          <img src="../../resources/images/channel4.png" alt="Channel explanation" id="article-img" style="width: 450px;" class="neighbor-ap-img">
        </div>
        <h2 class="subtitle">Ordem de melhor Signal Strength para pior:</h2>
        <p>→ <span style="background-color:rgb(102, 199, 6);">Weak/Weaker:</span> melhor que este, somente se não houverem redes no canal que desejas utilizar;</p>
        <p>→ <span style="background-color:rgb(199, 147, 6);">Normal:</span>  não é tão afetado, porém recomenda-se achar um canal melhor para evitar problemas;</p>
        <p>→ <span style="background-color:rgb(199, 28, 6);">Strong/Stronger:</span> fortemente afetado, não recomendado em nenhuma situação.</p>
      </article>

    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <a href="../conexao/configuracoes.php"><button class="back-btn">Voltar</button></a>
    <script src="../resources/js/main.js"></script>
  </body>
</html>