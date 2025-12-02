<?php
include '../conexao/connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Painel Admin</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../admin.css?v=1.2">
    <link rel="stylesheet" href="../style.css?v=1.2">
</head>
<body>

<!-- <?php include '../principais/header.php'; ?> -->

<section class="dashboard">

   <h1 class="heading">Painel Administrativo</h1>
         <header>
           
                <ul>
              <li><a href="../index.php">Voltar</a></li>



                </ul>

               
            </header> 

   <div class="box-container">

      <div class="box">
         <?php
            $resultado = mysqli_query($conn, "SELECT * FROM produtos");
            $produtos = mysqli_num_rows($resultado);
         ?>
         <h3><?= $produtos; ?></h3>
         <p>Produtos</p>
         <a href="produtos.php" class="btn">Ver produtos</a>
      </div>

      <div class="box">
         <?php
            $resultado = mysqli_query($conn, "SELECT * FROM contato");
            $contatos = mysqli_num_rows($resultado);
         ?>
         <h3><?= $contatos; ?></h3>
         <p>Mensagens de Contato</p>
         <a href="contatos.php" class="btn">Ver mensagens</a>
      </div>

      <div class="box">
         <?php
            $resultado = mysqli_query($conn, "SELECT * FROM users");
            $admins = mysqli_num_rows($resultado);
         ?>
         <h3><?= $admins; ?></h3>
         <p>Usuários</p>
         <a href="users.php" class="btn">Ver Usuários</a>
      </div>

   </div>

</section>

<script src="../adminscript.js"></script>

</body>
</html>
