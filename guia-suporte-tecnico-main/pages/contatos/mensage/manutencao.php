<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manutenções</title>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1961AC;
      color: #000000;
      font-size: 1em;
      overflow: auto;
      height: 100vh;
    }

    header {
      background-color: #1961AC;
      color: white;
      padding: 30px 20px;
      text-align: center;
      font-size: 1.8em;
      font-weight: bold;
      border-bottom: 4px solid #1961AC;
    }

    main {
      max-width: 850px;
      margin: 40px auto;
      padding: 25px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      overflow: auto;
      padding-bottom: 100px;
    }

    footer {
      margin-top: 40px;
      background-color: #1961AC;
      color: white;
      text-align: center;
      padding: 15px 0;
      font-size: 0.9em;
    }

    h1 {
      text-align: center;
      font-size: 2.2em;
      color: #0D2C56;
      margin-bottom: 30px;
    }

    /* Estilo para o primeiro subtítulo */
    h2.cto {
      font-size: 1.4em;
      font-weight: bold;
      margin-bottom: 20px;
      color: #3ccfaf; /* Cor inicial do primeiro subtítulo */
    }

    /* Estilo para o segundo subtítulo */
    h2.emergencia {
      font-size: 1.4em;
      font-weight: bold;
      margin-bottom: 20px;
      color: #53a762; /* Cor inicial do segundo subtítulo */
    }

    p {
      margin-bottom: 15px;
      line-height: 1.6;
      font-size: 1em;
    }

    .menu {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-top: 25px;
    }

    .menu a {
      display: block;
      text-decoration: none;
      padding: 15px;
      background-color: #ffce65;
      color: white;
      border-radius: 8px;
      text-align: center;
      font-weight: bold;
      font-size: 1.1em;
      transition: background-color 0.3s ease;
    }

    .menu a:hover {
      background-color: #fec65f;
    }

    /* Botão Grow */
    .button.grow {
      display: inline-block;
      padding: 10px 30px;
      background-color: #ffce65;
      color: #1961ac;
      text-decoration: none;
      border: 2px solid #ffce65;
      border-radius: 25px;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.1em;
      text-align: center;
      transition: transform 0.3s ease, background-color 0.3s ease;
      cursor: pointer;
      position: fixed;
      bottom: 20px;
      right: 20px;
    }

    .button.grow:hover {
      background-color: #f9b12e;
      color: white;
      transform: scale(1.1);
    }

    .highlight {
      color: #0f58a1;
      font-weight: bold;
    }

    /* Estilo para o botão quando rolar a página */
    .button.grow.scrolled {
      background-color: #f9b12e;
    }

    /* Personalização da barra de rolagem */
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #ffce65;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: #fec65f;
    }

    ::-webkit-scrollbar-track {
      background-color: #1961AC;
      border-radius: 10px;
    }
  </style>
</head>

<body>

  <header>Even Telecom | Manutenção</header>

  <main>
    <h1>Manutenções na Rede Externa</h1>
    <br>
    <!-- Section: Em CTO -->
    <section>
      <h2 class="cto">Em CTO</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Gostaríamos de informar que estamos realizando uma manutenção na Caixa de Terminação Óptica (CTO) localizada no poste. Esse trabalho é necessário para garantir que nossos serviços continuem funcionando com a melhor qualidade.</p>
      <p>Durante a manutenção, é esperado que haja uma interferência no sinal de internet, o que pode causar uma breve interrupção no serviço. No entanto, prevemos que a manutenção será completada ainda ao longo do dia, com o objetivo de minimizar qualquer transtorno.</p>
      <p>Agradecemos sua compreensão e paciência. Caso tenha qualquer dúvida ou precise de suporte adicional, nossa equipe está à disposição.</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte técnico | Even Telecom</strong></p>
    </section>

    <br><br>

    <!-- Section: Emergência -->
    <section>
      <h2 class="emergencia">Emergência</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Informamos que estamos realizando uma manutenção de emergência em nossa infraestrutura na sua área. Este trabalho é crucial para resolver um problema imprevisto e assegurar a continuidade dos nossos serviços.</p>
      <p>Durante o período de manutenção, você poderá enfrentar uma interrupção temporária no serviço de internet. Estamos trabalhando para completar os reparos o mais rapidamente possível e minimizar qualquer impacto. A previsão é que os serviços sejam restabelecidos ainda hoje.</p>
      <p>Agradecemos pela sua compreensão e paciência enquanto trabalhamos para restaurar o serviço. Caso tenha alguma dúvida ou precise de assistência adicional, nossa equipe está à disposição para ajudá-lo(a).</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte técnico | Even Telecom</strong></p>
    </section>

  </main>

  <!-- Botão de Voltar -->
  <a href="../avisos.php" class="button grow">Voltar</a>

  <footer>Even Telecom - Cachoeirinha</footer>

  <script>
    // Script para adicionar a classe 'scrolled' quando o usuário rolar a página
    window.addEventListener('scroll', function () {
      var button = document.querySelector('.button.grow');
      if (window.scrollY > 100) {
        button.classList.add('scrolled');
      } else {
        button.classList.remove('scrolled');
      }
    });
  </script>

</body>

</html>
