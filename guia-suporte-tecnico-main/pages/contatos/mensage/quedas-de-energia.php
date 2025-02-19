<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quedas de Energia</title>
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

    .no-power {
      color: #8B0000;
    }

    .power-returning {
      color: #4CAF50;
    }

    .pop-power-outage {
      color: #FFA500;
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
      width: 12px; /* Largura da barra de rolagem */
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(45deg, #ffce65, #fec65f); /* Gradiente */
      border-radius: 10px; /* Bordas arredondadas */
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(45deg, #f9b12e, #fec65f); /* Gradiente ao passar o mouse */
    }

    ::-webkit-scrollbar-track {
      background-color: #1961ac; /* Cor do fundo da trilha */
      border-radius: 10px;
    }
  </style>
</head>

<body>

  <header>Even Telecom | Quedas de Energia</header>

  <main>
    <h1>Queda de Energia</h1>
    <br>
    <section class="content-section">
      <h2 class="no-power">Falta de Energia - Ainda sem energia</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Informamos que, devido a uma interrupção no fornecimento de energia elétrica, os serviços em sua região estão temporariamente indisponíveis. O sinal será automaticamente restabelecido assim que o fornecimento de energia for normalizado.</p>
      <p>Caso a energia retorne e o sinal não seja restabelecido, recomendamos que retire o modem da tomada, aguarde alguns segundos e o conecte novamente. Se o serviço ainda não voltar, nossa equipe de suporte estará à disposição para ajudar até a meia-noite, de segunda a sábado. Aos domingos e feriados, o atendimento está disponível até as 22h.</p>
      <p>Agradecemos sua paciência e compreensão.</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte técnico | Even Telecom</strong></p>
    </section>

    <br><br>

    <section class="content-section">
      <h2 class="power-returning">Falta de Energia - Energia retornando</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Informamos que o fornecimento de energia elétrica em sua região já foi restabelecido. Entretanto, o restabelecimento total do serviço de internet pode levar até quarenta minutos para normalizar. Durante esse período, solicitamos que monitore a conexão. Caso o serviço não seja normalizado dentro desse prazo, recomendamos proceder com a reinicialização do modem, retirando-o da tomada, aguardando alguns segundos e, em seguida, reconectando-o.</p>
      <p>Persistindo a indisponibilidade do serviço, nossa equipe de suporte estará à disposição para prestar assistência até a meia-noite, de segunda a sábado, e até as 22h aos domingos e feriados.</p>
      <p>Agradecemos a sua compreensão e nos colocamos à disposição para quaisquer dúvidas.</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte Técnico | Even Telecom</strong></p>
    </section>

    <br><br>

    <section class="content-section">
      <h2 class="pop-power-outage">Queda de Energia no POP - Equipe Resolvendo Problema</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Informamos que houve uma queda de energia em nosso centro principal de distribuição de internet do seu bairro, o que está impactando o serviço em sua região. Nossa equipe técnica já está trabalhando para resolver o problema, e a previsão é que o serviço seja totalmente restabelecido até o final do dia.</p>
      <p>Durante este período, solicitamos que monitore a conexão. Caso o serviço não seja normalizado após o retorno previsto, recomendamos proceder com a reinicialização do modem, retirando-o da tomada, aguardando alguns segundos e, em seguida, reconectando-o.</p>
      <p>Persistindo a indisponibilidade do serviço, nossa equipe de suporte estará à disposição para prestar assistência até a meia-noite, de segunda a sábado, e até as 22h aos domingos e feriados.</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte Técnico | Even Telecom</strong></p>
    </section>

    <a href="../avisos.php" class="button grow">Voltar</a>
  </main>

  <footer>Even Telecom - Cachoeirinha</footer>

</body>

</html>
