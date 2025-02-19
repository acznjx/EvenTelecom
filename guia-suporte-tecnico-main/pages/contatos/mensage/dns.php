<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rotas</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1961AC;
      color: #000000;
      font-size: 0.95em;
      min-height: 100vh;
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
      color: #1961AC;
      margin-bottom: 30px;
    }

    h2 {
      font-size: 1.4em;
      font-weight: bold;
      margin-bottom: 15px;
      line-height: 1.4;
    }

    .ptt {
      color: #8a56ce;
    }

    .routes {
      color: #cc3ecc;
    }

    p {
      margin-bottom: 20px;
      line-height: 1.6;
      font-size: 1em;
      color: #000000;
    }

    .content-section {
      margin-bottom: 30px;
    }

    .content-section p strong {
      font-size: 1.1em;
      color: #000000;
    }

    .button.grow {
      display: inline-block;
      padding: 12px 30px;
      background-color: #ffce65;
      color: #1961ac;
      text-decoration: none;
      border: 2px solid #ffce65;
      border-radius: 25px;
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
      color: #1961ac;
      transform: scale(1.1);
    }

    /* Personalização da barra de rolagem */
    ::-webkit-scrollbar {
      width: 12px;
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(45deg, #ffce65, #fec65f);
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(45deg, #f9b12e, #fec65f);
    }

    ::-webkit-scrollbar-track {
      background-color: #1961ac;
      border-radius: 10px;
    }
  </style>
</head>

<body>

  <header>Even Telecom | Rotas</header>

  <main>
    <h1>Instabilidade em Rotas</h1>
    <br>
    <!-- Section: PTT Instabilidade -->
    <section class="content-section">
      <h2 class="ptt">PTT - Instabilidade</h2>
      <p><strong>Prezados clientes,</strong></p>
      <p>Gostaríamos de informá-los sobre uma recente instabilidade no Ponto de Troca de Tráfego do Rio Grande do Sul (PTT-RS), que afetou temporariamente alguns de nossos serviços de internet. O PTT-RS é uma infraestrutura essencial que facilita a troca de dados entre diferentes redes, e sua instabilidade pode causar lentidão ou interrupções na navegação. Ressaltamos que este problema ocorreu fora da infraestrutura da Even Telecom, o que impossibilita nossa intervenção direta. Estamos trabalhando para contornar o ocorrido e minimizar os impactos para nossos clientes.</p>
      <p>Agradecemos a compreensão e paciência de todos.</p>
      <p><strong>Atenciosamente,<br>Equipe Even Telecom</p></strong>
    </section>

<br><br>

    <!-- Section: Instabilidade nas Rotas -->
    <section class="content-section">
      <h2 class="routes">Rotas - Instabilidade</h2>
      <p><strong>Prezados clientes,</strong></p>
      <p>Informamos que estamos enfrentando uma instabilidade em uma das rotas de nossa rede, o que pode ter causado impactos temporários em nossos serviços. Em resposta a essa situação, nossa equipe de especialistas está trabalhando de forma intensiva para resolver o problema e garantir a restauração completa dos serviços afetados.</p>
      <p>Agradecemos a compreensão e paciência enquanto tomamos as medidas necessárias para solucionar essa questão.</p>
      <p><strong>Atenciosamente,<br>Equipe Even Telecom</p></strong>
    </section>
  </main>

  <!-- Botão de Voltar -->
  <a href="../avisos.php" class="button grow">Voltar</a>

  <footer>Even Telecom - Cachoeirinha</footer>

</body>

</html>
