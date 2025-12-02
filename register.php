<?php
session_start();
require_once "conexao/connect.php";

$mensagem = "";
$jaLogadoAviso = "";
$cadastro_sucesso = false;

if (isset($_SESSION['user_id'])) {
    $jaLogadoAviso = "Você já está logado em uma conta, se criar uma nova, fará logout da atual e ficará logado na nova.";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome     = isset($_POST["nome"]) ? trim($_POST["nome"]) : "";
    $endereco = isset($_POST["endereco"]) ? trim($_POST["endereco"]) : "";
    $email    = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $senha    = isset($_POST["senha"]) ? trim($_POST["senha"]) : "";

    if ($nome !== "" && $endereco !== "" && $email !== "" && $senha !== "") {
        $nomeEsc     = mysqli_real_escape_string($conn, $nome);
        $enderecoEsc = mysqli_real_escape_string($conn, $endereco);
        $emailEsc    = mysqli_real_escape_string($conn, $email);
        $senhaEsc    = mysqli_real_escape_string($conn, $senha);

        $sql = "INSERT INTO users (Nome, endereco, Email, Senha) VALUES ('$nomeEsc', '$enderecoEsc', '$emailEsc', '$senhaEsc')";

        if (mysqli_query($conn, $sql)) {
            $novoId = mysqli_insert_id($conn);

            $_SESSION['user_id'] = $novoId;
            $_SESSION['user_nome'] = $nomeEsc;

            $mensagem = "Parabéns, você é um cliente da Based!";
            $cadastro_sucesso = true;
        } else {
            $mensagem = "Erro ao cadastrar usuário: " . mysqli_error($conn);
        }
    } else {
        $mensagem = "Preencha todos os campos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Registrar</title>
</head>
<body>
    <div class="all">
        <?php include("principais/header.php"); ?>

        <div class="loginForm">
            <form method="post" action="register.php" class="formAuth">
                <h2 style="color: #EFE3D6;">Registre-se</h2>

                <?php if ($mensagem !== "") { ?>
                    <p style="color: #EFE3D6;">&raquo; <?php echo $mensagem; ?></p>
                <?php } ?>

                <?php if ($jaLogadoAviso !== "" && !$cadastro_sucesso) { ?>
                    <p style="color: #EFE3D6;"><?php echo $jaLogadoAviso; ?></p>
                <?php } ?>

                <?php if (!$cadastro_sucesso) { ?>
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>

                    <button class="btnContainer" type="submit" style="width: 100%;">Cadastrar</button>
                <?php } ?>
            </form>
        </div>
    </div>
</body>
</html>
