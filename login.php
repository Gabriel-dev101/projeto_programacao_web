<!DOCTYPE html>
<html lang="en">
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
            
            <form action="../index.html" method="get">
                <h2 style="color: #EFE3D6;">Realize seu Login</h2>
                <input type="text" placeholder="Digite Seu Email...">
                <input type="password" placeholder="Digite Sua Senha..."> 
            <button class="btnContainer" type="submit" style="width: 100%;">Entrar</button>
            </form>
           
        </div>
    </div>
</body>
</html>