<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Even Telecom - Avisos</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1961AC;
      color: #000000;
      font-size: 1em;
      overflow-x: hidden; /* Previne rolagem horizontal */
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
      overflow-y: auto; /* Permite rolagem vertical se necessário */
      max-height: 80vh; /* Limita a altura do conteúdo principal */
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

    h2 {
      font-size: 1.4em;
      font-weight: bold;
      margin-bottom: 20px;
      color: #1e515e;
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
      background-color: #ecb246;
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

    /* Tornando a parte da trilha da barra de rolagem invisível quando não está sendo utilizada */
    ::-webkit-scrollbar-track {
      background-color: #1961AC; /* Cor igual ao fundo da página */
      border-radius: 10px;
    }

    /* Escondendo a barra de rolagem até que seja rolada */
    body {
      overflow-y: scroll;
    }

    /* Mostrando a barra de rolagem apenas quando o usuário rolar */
    body::-webkit-scrollbar {
      display: none; /* Esconde a barra de rolagem inicialmente */
    }

    body:hover::-webkit-scrollbar {
      display: block; /* Mostra a barra de rolagem quando o mouse estiver sobre a página */
    }
  </style>
</head>

<body>

  <header>Even Telecom - Avisos</header>

  <main>
    <h1>Informações do CallCenter</h1>

    <section>
      <h2>Horários de Atendimento</h2>
      <p>Feriados e Domingos: 8h45 - 17h15</p>
      <p><span style="color: red;">(Somente suporte presencial)</span></p>
    </section>

    <section>
      <h2>Porto Alegre</h2>
      <p>Atendimentos às <strong><span class="highlight">Terças e Quintas</span></strong>, de preferência no início da manhã ou tarde.</p>
      <p><i>Negociável outras datas com o Gerente Luís André.</i></p>
    </section>

    <h2>Avisos</h2>
    <p>Escolha uma categoria para visualizar os detalhes:</p>

    <div class="menu">
      <a href="../contatos/mensage/rompimentos.php">Rompimento</a>
      <a href="../contatos/mensage/quedas-de-energia.php">Quedas de Energia</a>
      <a href="../contatos/mensage/manuntecao.php">Manutenções</a>
      <a href="../contatos/mensage/dns.php">Rotas/DNS</a>
    </div>

  </main>

  <a href="../contatos-avisos.php
  " rel="grow" class="button grow">Voltar</a>

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
