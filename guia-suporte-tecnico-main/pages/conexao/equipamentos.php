<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../../resources/images/even-logo.png">
  <title>Conexão - Even</title>
  <link rel="stylesheet" href="../../resources/css/default.css">
  <link rel="stylesheet" href="../../resources/css/conexao.css">
  <style>
    /* Cor de fundo dos planos */
    .plano-100mbps, .plano-400mbps, .plano-650mbps, .plano-1gbps, .repetidores {
      background-color: #2167b1;
    }

    /* Cor de fundo dos subtítulos (marcador de plano) */
    h1.plano-100mbps, h1.plano-400mbps, h1.plano-650mbps, h1.plano-1gbps, h1.repetidores {
      background-color: #1961ac; /* cor do fundo */
      color: white; /* cor do texto */
      padding: 10px;
      border-radius: 5px;
      text-align: center;
      width: 100%;
    }
  </style>
</head>
<body>

  <nav>
    <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
  </nav>

  <main>

    <h1 class="title" style="font-size: 42px">Equipamentos por plano:</h1>

    <!-- Plano 100Mbp/s -->
    <h1 class="emphasis plano-100mbps" style="margin-top: 3.5rem;">Plano de 100Mbp/s</h1>
    <article class="plano plano-100mbps">
      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Easy4Link<br><span class="emphasis">E4L</span></h2>
        <img src="../../resources/images/E4L.png" alt="Easy4Link E4L" id="equipamento">
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento"><span class="emphasis">Nokia</span><br>G-140w-h</h2>
        <img src="../../resources/images/nokia.png" alt="Nokia G-140w-h" id="equipamento">
      </div>
    </article>

    <!-- Plano 400/550Mbp/s -->
    <h1 class="emphasis plano-400mbps" style="margin-top: 3.5rem;">Plano de 400Mbp/s ou 550Mbp/s</h1>
    <article class="plano plano-400mbps">
      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei<br>EG8145<span class="emphasis">V5</span></h2>
        <img src="../../resources/images/v5.png" alt="Huawei EG8145V5" id="equipamento">
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei<br>EG8145<span class="emphasis">V5-V2</span></h2>
        <img src="../../resources/images/v5-v2.png" alt="Huawei EG8145V5-V2" id="equipamento">
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei<br>EG8145<span class="emphasis">X6-10</span></h2>
        <img src="../../resources/images/x6-10.png" alt="Huawei EG8145X6-10" id="equipamento">
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei<br>HG8245<span class="emphasis">Q2</span></h2>
        <img src="../../resources/images/q2.png" alt="Huawei HG8245Q2" id="equipamento">
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Easy4Link<br><span class="emphasis">E4L</span></h2>
        <img src="../../resources/images/E4L.png" alt="Easy4Link E4L" id="equipamento">
      </div>
    </article>

    <!-- Plano 650/750Mbp/s -->
    <h1 class="emphasis plano-650mbps" style="margin-top: 3.5rem;">Plano de 650Mbp/s ou 750Mbp/s</h1>
    <article class="plano plano-650mbps">
      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei<br>EG8145<span class="emphasis">V5-V2</span></h2>
        <img src="../../resources/images/v5-v2.png" alt="Huawei EG8145V5-V2" id="equipamento">
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei<br>EG8145<span class="emphasis">X6-10</span></h2>
        <img src="../../resources/images/x6-10.png" alt="Huawei EG8145X6-10" id="equipamento">
      </div>
    </article>

    <!-- Plano 1Gbp/s -->
    <h1 class="emphasis plano-1gbps" style="margin-top: 3.5rem;">Plano de 1Gbp/s</h1>
    <article class="plano plano-1gbps">
      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei<br>EG8145<span class="emphasis">X6-10</span></h2>
        <img src="../../resources/images/x6-10.png" alt="Huawei EG8145X6-10" id="equipamento">
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei<br>EG8145<span class="emphasis">X6</span></h2>
        <img src="../../resources/images/x6.png" alt="Huawei EG8145X6" id="equipamento">
      </div>
    </article>

    <!-- Repetidores / Mesh -->
    <h1 class="emphasis repetidores" style="margin-top: 3.5rem;">Repetidores / Mesh</h1>
    <article class="plano repetidores">
      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Intelbras<br><span class="emphasis">IWR-3000n</span></h2>
        <img src="../../resources/images/iwr.png" alt="Intelbras IWR-3000n" id="equipamento">
        <p>Esse repetidor é usado para planos simples sem custo adicional mensal, sendo cobrado apenas o cabo de rede (R$3,00 por metro). Passa no máximo 100Mbp/s.</p>
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Intelbras<br><span class="emphasis">GF-1200</span></h2>
        <img src="../../resources/images/gf-1200.png" alt="Intelbras GF-1200" id="equipamento">
        <p>Usado para planos simples também, passando 100Mbp/s. Inclui a rede 5G, sendo este o diferencial do repetidor <strong>IWR-3000n</strong>.</p>
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei <span class="emphasis">AX2</span></h2>
        <img src="../../resources/images/ax2.png" alt="Huawei AX2" id="equipamento">
        <p>Utilizado para redes Mesh, passa a quantidade de Mbp/s do plano contratado pelo cliente (também encontrado como equipamento principal com uma bridge). Como Mesh é cobrado o valor de R$29,90 mensais, sem cobrança do cabo de rede.</p>
      </div>

      <div class="container-equipamento">
        <h2 class="titulo-equipamento">Huawei <span class="emphasis">AX2S</span></h2>
        <img src="../../resources/images/ax2s.png" alt="Huawei AX2S" id="equipamento" style="width: 400px;">
        <p>Utilizado da mesma forma, situação e cobrança que o <strong>Huawei AX2</strong>.</p>
      </div>
    </article>

  </main>

  <footer>Even Telecom - Cachoeirinha</footer>

  <script src="../../resources/js/main.js"></script>
  <a href="../conexao.php"><button class="back-btn">Voltar</button></a>
</body>
</html>