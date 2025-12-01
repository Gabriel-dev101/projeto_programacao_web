<?php

include '../components/connect.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
   exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Painel Admin</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="dashboard">

   <h1 class="heading">Painel Administrativo</h1>

   <div class="box-container">

      <!-- Produtos -->
      <div class="box">
         <?php
            $produtos = $conn->query("SELECT * FROM products")->rowCount();
         ?>
         <h3><?= $produtos; ?></h3>
         <p>Produtos</p>
         <a href="products.php" class="btn">Ver produtos</a>
      </div>

      <!-- Compras -->
      <div class="box">
         <?php
            $compras = $conn->query("SELECT * FROM orders")->rowCount();
         ?>
         <h3><?= $compras; ?></h3>
         <p>Compras</p>
         <a href="placed_orders.php" class="btn">Ver compras</a>
      </div>

      <!-- Contato -->
      <div class="box">
         <?php
            $contatos = $conn->query("SELECT * FROM messages")->rowCount();
         ?>
         <h3><?= $contatos; ?></h3>
         <p>Mensagens de Contato</p>
         <a href="messages.php" class="btn">Ver mensagens</a>
      </div>

      <!-- Admins -->
      <div class="box">
         <?php
            $admins = $conn->query("SELECT * FROM admin")->rowCount();
         ?>
         <h3><?= $admins; ?></h3>
         <p>Admins</p>
         <a href="admin_accounts.php" class="btn">Ver admins</a>
      </div>

   </div>

</section>

<script src="../js/admin_script.js"></script>

</body>
</html>
