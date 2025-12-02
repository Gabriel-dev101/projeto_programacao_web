<?php
session_start();
require_once "conexao/connect.php";
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css?v=1.2">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Produtos Based</title>
</head>

<body>
    <div class="all">
        <?php include("principais/header.php"); ?>
        <div class="container">
            <div class="textContainer">
                <h1>Produtos</h1>
                <div class="gridContainer">
                    <?php
                    $resultado = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($resultado) > 0) {

                        while ($produtos = mysqli_fetch_array($resultado)) {
                            ?>
                            <div class="box">
                                <img src="<?= $produtos['image'] ?>" alt="Jaqueta Based" style="width: 250px;">
                                  <br>
                                <h3><?= $produtos['title'] ?></h3>
                                <br>
                                <span><?= $produtos['desc'] ?></span>
                                <h1 class="price"><span>R$</span> <?= $produtos['price'] ?> </h1>
                                <form method="post" action="carrinho.php">
                                    <input type="hidden" name="acao" value="add">
                                    <input type="hidden" name="produto_id" value="<?= $produtos['id'] ?>">
                                    <button style="width: 90%;" class="btnContainer" type="submit">Comprar</button>
                                </form>
                            </div>
                            <?php
                        }
                    }
                    ?>
                 
                </div>
            </div>

        </div>
    </div>
</body>

</html>