<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css"> <!-- seu CSS geral -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <title>Contato</title>
</head>
<body>
 <div class="all">
        <?php include("principais/header.php"); ?>
  <div class="container verticalContactLayout">
    <div class="logoContainer">
      <img src="../images/ChatGPT Image 27 de mai. de 2025, 16_12_45.png" alt="Logo Based">
    </div>

    <div class="textContainer">
      <h1>Fale conosco</h1>
      <p>
        Abaixo listamos as formas de contato disponíveis em nossa loja.<br>
        Estamos ansiosos em lhe atender da melhor maneira possível.
      </p>
      <p>
           Horário de atendimento: <br>
           Nosso SAC funciona de segunda a sexta-feira, das 9:00h às 17:30h.
      </p>
      <p>
        E-mail: help@based.com.br <br>
        Instagram:Basedclotchesoficial
      </p>
            
      <form class="contactForm" action="#" method="post">
        <h2>Envie sua mensagem</h2>
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="número">Número:</label>
        <input type="number" id="número"  name="número" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

        <button type="submit">Enviar</button>
      </form>

    </div>
  </div>
 </div>
</body>
</html>
