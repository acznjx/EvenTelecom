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
</head>
  <body>

    <nav>
      <img src="../../resources/images/even-logo.png" alt="Logo da Even Telecom">
    </nav>

    <main>

      <h1 class="title">Alteram conexão Wi-fi e via Cabo de Rede:</h1>

      <article>
        <a href="qos.php"><h1>QoS (Quality of Service)</h1></a>
        <p>A sigla QoS significa “Quality of Service” (qualidade de serviço), é uma configuração disponíveis em equipamentos com software mais atualizado, mas infelizmente este serviço não é bem implementado na maioria dos modems. Ele trabalha com um preset de prioridades de banda, alocando uma largura de banda maior para um dispositivo em específico que pode ser configurado no software do modem mesmo. <a href="qos.php">Clique aqui para saber mais.</a></p>
      </article>

      <article>
        <a href="upnp.php"><h1>UPnP (Universal Plug and Play)</h1></a>
        <p>O UPnP é um serviço que automatiza a descoberta de dispositivos em uma rede local, permitindo que diferentes dispositivos na mesma rede se reconheçam automaticamente e conectem entre si. Recomenda-se habilitar para que o cliente consiga conectar dispositivos em específico na sua rede sem ter dores de cabeça (como câmeras, por exemplo). Pode também ser uma implementação interessante para clientes com problemas em jogos visto que é uma alternativa para o redirecionamento de portas. <a href="upnp.php">Clique aqui para saber mais.</a></p>
      </article>

      <article>
        <a href="dns.php"><h1>DNS (Domain Name System)</h1></a>
        <p>Com sua sigla significando “Domain Name System” (sistema de nome(s) de domínio), o DNS impacta diretamente no acesso do cliente à sites, visto que é o protocolo que “traduz” os nomes dos sites em endereços IP. Caso o cliente não consiga navegar em um site em específico ou apresente lentidão ao carregar o site, uma boa tentativa seria mudar o DNS do equipamento do mesmo para verificar se haverão melhoras. <a href="dns.php">Clique aqui para saber mais.</a></p>
      </article>

      <article>
        <a href="dmz.php"><h1>Abertura de portas | DMZ (Demilitarized Zone)</h1></a>
        <p>A abertura de portas serve para encaminhar pacotes de um certo range predefinido diretamente a um dispositivo específico, facilitando a configuração de servidores, sistemas, etc. A DMZ (Zona Desmilitarizada) faz com que um dispositivo escolhido pelo usuário seja o "centro dos pacotes", recebendo todos os pacotes destinados àquela rede e delegando a função de redirecioná-los conforme necessário. Isso significa que, em uma configuração de DMZ, um dispositivo específico é configurado para receber todo o tráfego externo, permitindo uma gestão centralizada de segurança e comunicação, enquanto mantém a rede interna protegida contra acessos não autorizados.<a href="dmz.php"> Clique aqui para saber mais.</a></p>
      </article>

      <h1 class="title">Alteram conexão somente Wi-fi:</h1>

      <article>
        <a href="channel.php"><h1>Canais de frequência (Channel)</h1></a>
        <p>A sigla QoS significa “Quality of Service” (qualidade de serviço), é uma configuração disponíveis em equipamentos com software mais atualizado, mas infelizmente este serviço não é bem implementado na maioria dos modems. Ele trabalha com um preset de prioridades de banda, alocando uma largura de banda maior para um dispositivo em específico que pode ser configurado no software do modem mesmo. <a href="channel.php">Clique aqui para saber mais.</a></p>
      </article>

      <article>
        <a href="channel-width.php"><h1>Channel Width (20/40/80/160Mhz)</h1></a>
        <p>O Channel Width (ou “Largura de canal”) determina como o próprio nome diz, a largura de dados transmitidos em uma frequência. Quanto maior a largura, mais dados podem trafegar. Todavia, quanto maior a quantidade de roteadores na mesma largura, mais congestiona-se uma faixa específica.Pense nisso como uma rodovia. Se a estrada for larga, mais tráfego (dados) pode trafegar por ela. No entanto, quanto mais veículos (roteadores) nele, mais congestionado o tráfego fica. <a href="channel-width.php">Clique aqui para saber mais.</a></p>
      </article>

    </main>

    <footer>Even Telecom - Cachoeirinha</footer>

    <script src="../../resources/js/main.js"></script>
    <a href="../conexao.php"><button class="back-btn">Voltar</button></a>
  </body>
</html>