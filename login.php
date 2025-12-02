<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Login Based</title>
</head>
<body>
    <div class="all">
        <?php include("principais/header.php"); ?>

        <div class="loginForm">
            <form action="login_action.php" method="post">
                <h2 style="color: #EFE3D6;">Realize seu Login</h2>

                <input type="email" name="email" placeholder="Digite Seu Email..." required>
                <input type="password" name="senha" placeholder="Digite Sua Senha..." required>

                <button class="btnContainer" type="submit" style="width: 100%;">Entrar</button>

                <?php if(isset($_GET['precisa_login'])): ?>
                    <p style="color: #EFE3D6; margin-top: 10px;">
                        Faça login para acessar o carrinho e finalizar suas compras.
                    </p>
                <?php endif; ?>

                <?php if(isset($_GET['erro'])): ?>
                    <p style="color: red; margin-top: 10px;">
                        Email ou senha incorretos.
                    </p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>
