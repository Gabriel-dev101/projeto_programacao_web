<?php
include '../conexao/connect.php';
session_start();

$msg = "";

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    // Busca somente usuários que são administradores
    $query = "SELECT * FROM users WHERE email = '$email' AND tipo = 'admin' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);

        // Verifica senha
        if (password_verify($senha, $admin['senha'])) {

            // Cria sessão
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_nome'] = $admin['nome'];

            header("Location: admin.php");
            exit();
        } else {
            $msg = "Senha incorreta!";
        }
    } else {
        $msg = "Administrador não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Administrador</title>

   <link rel="stylesheet" href="../style.css">
   <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f1f1f1;
        }

        .login-box {
            width: 350px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            background: #333;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
   </style>
</head>
<body>

<div class="login-box">
    <h2>Login Admin</h2>

    <?php if ($msg != "") { ?>
        <div class="error"><?= $msg ?></div>
    <?php } ?>

    <form action="" method="POST">

        <input type="email" name="email" placeholder="E-mail" required>

        <input type="password" name="senha" placeholder="Senha" required>

        <button type="submit" name="login">Entrar</button>
    </form>
</div>

</body>
</html>
