<?php
// --- CONEXÃO COM O BANCO ---
$conexao = mysqli_connect("localhost", "root", "", "projetoweb", 3306);
if (!$conexao) {
    die("Erro ao conectar ao banco de dados.");
}
mysqli_set_charset($conexao, "utf8mb4");

// --- QUANDO O FORMULÁRIO FOR ENVIADO ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // RECEBENDO DADOS DO FORMULÁRIO (usar nome sem acento)
    $nome   = $_POST['nome'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $email  = $_POST['email'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    // INSERINDO NO BANCO usando prepared statement
    $sql = "INSERT INTO contato (nome, numero, email, mensagem) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $nome, $numero, $email, $mensagem);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Mensagem enviada com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao enviar mensagem!');</script>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Erro na preparação da query.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="style.css">
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
      <img src="images/ChatGPT Image 27 de mai. de 2025, 16_12_45.png" alt="Logo Based">
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
        Instagram: Basedclotchesoficial
      </p>
            
      <!-- FORMULÁRIO -->
      <form class="contactForm" action="" method="POST">
        <h2>Envie sua mensagem</h2>
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>

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