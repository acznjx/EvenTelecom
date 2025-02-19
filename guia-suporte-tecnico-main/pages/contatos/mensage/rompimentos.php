
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rompimento</title>
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

    .morning-afternoon {
      color: #a147bd;
    }

    .in-progress {
      color: #4caa6b;
    }

    .night {
      color: #f1b546;
    }

    .rainy {
      color: #64ade9;
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
      background-color: #1961AC;
      border-radius: 10px;
    }
  </style>
</head>

<body>

  <header>Even Telecom | Rompimento</header>

  <main>
    <h1>Rompimento na Fibra Óptica</h1>
    <br>
    <!-- Section: Não em execução → Manhã/Tarde -->
    <section class="content-section">
      <h2 class="morning-afternoon">Rompimento | Não em execução → Manhã/Tarde</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Informamos que, devido a um rompimento na fibra óptica, os serviços em sua região estão temporariamente interrompidos. Nossas equipes técnicas estão a caminho para realizar a inspeção e identificar a causa do problema.</p>
      <p>Dado que o incidente é recente, ainda não temos uma previsão exata para a conclusão da manutenção. No entanto, estamos empenhados em resolver a situação o mais rapidamente possível, com o objetivo de restaurar os serviços ainda hoje.</p>
      <p>Lamentamos pelos inconvenientes e agradecemos pela sua compreensão e paciência durante este período.</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte técnico | Even Telecom</strong></p>
    </section>

    <br><br>

    <!-- Section: Em execução/Finalizando → Manhã/Tarde -->
    <section class="content-section">
      <h2 class="in-progress">Rompimento | Em execução/Finalizando → Manhã/Tarde</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Informamos que, em decorrência de um rompimento na fibra óptica, os serviços em sua região estão temporariamente interrompidos. Nossas equipes técnicas encontram-se no local realizando a manutenção necessária para restabelecer a normalidade.</p>
      <p>Estamos empenhados em concluir a manutenção e restabelecer os serviços ainda hoje. Embora não possamos fornecer um horário exato para a resolução, garantimos que estamos trabalhando com a máxima urgência para minimizar o impacto.</p>
      <p>Lamentamos profundamente os transtornos causados e agradecemos pela sua compreensão e paciência.</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte técnico | Even Telecom</strong></p>
    </section>

    <br><br>

    <!-- Section: Não em execução → Noite -->
    <section class="content-section">
      <h2 class="night">Rompimento | Não em execução → Noite</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Comunicamos que identificamos um rompimento na fibra óptica responsável pela interrupção dos serviços em sua região. No entanto, devido ao horário atual, nossas equipes técnicas não estão disponíveis para realizar a manutenção imediatamente.</p>
      <p>A equipe técnica foi informada da situação e iniciará o reparo assim que o expediente matutino começar. Estamos tomando todas as medidas necessárias para resolver o problema com a maior agilidade possível.</p>
      <p>Pedimos desculpas pelos transtornos e agradecemos pela sua compreensão e paciência.</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte técnico | Even Telecom</strong></p>
    </section>

    <br><br>

    <!-- Section: Em momento de chuvas -->
    <section class="content-section">
      <h2 class="rainy">Rompimento | Em momento de chuvas</h2>
      <p><strong>Prezado(a) Cliente,</strong></p>
      <p>Informamos que identificamos um rompimento na fibra óptica responsável pela interrupção dos serviços em sua região. No entanto, devido ao momento chuvoso atual, nossas equipes técnicas precisam aguardar a melhora das condições climáticas para garantir a segurança durante a manutenção.</p>
      <p>Assim que o tempo permitir e as condições se tornarem seguras, a equipe técnica iniciará o reparo. Estamos tomando todas as medidas necessárias para resolver o problema com a maior agilidade possível.</p>
      <p>Pedimos desculpas pelos transtornos e agradecemos pela sua compreensão e paciência.</p>
      <p><strong>Atenciosamente,</strong></p>
      <p><strong>Suporte Técnico | Even Telecom</strong></p>
    </section>

  </main>

  <!-- Botão de Voltar -->
  <a href="../avisos.php" class="button grow">Voltar</a>

  <footer>Even Telecom - Cachoeirinha</footer>

</body>

</html>
