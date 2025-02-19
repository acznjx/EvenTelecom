<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../../resources/images/even-logo.png">
  <title>DMZ - Even</title>
  <link rel="stylesheet" href="../../resources/css/default.css">
</head>
  <body>
    <nav>
      <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>
    <main>

      <h1 class="title">Abertura de portas</h1>

      <article>
        <p>A abertura de portas permite que você realize um direcionamento de pacotes com um “endereço específico” diretamente para um dispositivo que deseja, pode ser utilizado tanto para TCP quanto para UDP. Por exemplo, caso o cliente tenha problema com algum jogo em específico, você pode pesquisar as portas daquele jogo no Google para fazer um redirecionamento de portas.
        </p>
        <div class="img-container">
          <img src="../../resources/images/redirecionamento-de-portas.jpg" alt="DNS" id="article-img">
          <p>Imagem demonstrando o redirecionamento de portas pela porta :443</p>
        </div>
      </article>

      <h1 class="title">DMZ (Demilitarized Zone)</h1>

      <article>
        <p>Ao selecionar um dispositivo como “Host DMZ” você aloca-o para operar fora do firewall e atuar como o DMZ da rede, mas ainda assim os outros dispositivos ficam dentro do firewall da rede doméstica. <br>⚠️ Pode ajudar pois não permite que o firewall “barre” pacotes ou complique-os de chegar no dispositivo, porém pode ser prejudicial visto que não há a proteção de dados que o dispositivo deveria ter. Sempre avise ao cliente do “perigo” que isto pode causar. ⚠️
        </p>  
      </article>

    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <script src="../resources/js/main.js"></script>
    <a href="../conexao/configuracoes.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>