<?php
require_once "conexao/connect.php";
$sql = "SELECT * FROM produtos";

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
                    $resultado = mysqli_query($conexao, $sql);

                    if (mysqli_num_rows($resultado) > 0) {

                        while ($livros = mysqli_fetch_array($resultado)) {
                            ?>
                            <div class="box">
                                <img src="<?= $livros['image'] ?>" alt="Jaqueta Based" style="width: 250px;">
                                  <br>
                                <h3><?= $livros['title'] ?></h3>
                                <br>
                                <span><?= $livros['desc'] ?></span>
                                <h1 class="price"><span>R$</span> <?= $livros['price'] ?> </h1>
                                <button class="btnContainer">Comprar</button>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <!-- <div class="box">
                    <img src="images/camisa_based_preta.jpg" alt="Camisa básica preta" style="width: 250px;">
                    <figcaption>Camisa básica preta</figcaption>
                    <h1 class="price"><span>R$</span> 89, <span>99</span></h1>
                    <button class="btnContainer">Comprar</button>
                </div>
                  <div class="box">
                    <img src="images/camisa_based_frente.jpg" alt="Camisa básica branca" style="width: 250px;">
                    <figcaption>Camisa básica branca</figcaption>
                    <h1 class="price"><span>R$</span> 89, <span>99</span></h1>
                    <button class="btnContainer">Comprar</button>
                </div>
                     <div class="box">
                    <img src="images/moletom_based_preto.jpg" alt="Moletom Based" style="width: 250px;">
                    <figcaption>Moletom Based</figcaption>
                    <h1 class="price"><span>R$</span> 159, <span>99</span></h1>
                    <button class="btnContainer">Comprar</button>
                </div>
                <div class="box">
                    <img src="images/regata_based_branca.jpg" alt="Regata based" style="width: 250px;">
                    <figcaption>Regata based</figcaption>
                    <h1 class="price"><span>R$</span> 69, <span>99</span></h1>
                    <button class="btnContainer">Comprar</button>
                </div>
                <div class="box">
                    <img src="images/tenis_based_preto.jpg" alt="Tênis Based" style="width: 250px;">
                    <h1 class="price"><span>R$</span> 250, <span>00</span></h1>
                    <figcaption>Tênis Based</figcaption>
                    <button class="btnContainer">Comprar</button>
                </div>
                <div class="box">
                    <img src="images/camisa_manga_longa_azul.jpg" alt="Camisa de manga longa Based" style="width: 250px;">
                    <h1 class="price"><span>R$</span> 139, <span>99</span></h1>
                    <figcaption>Camisa de manga longa Based</figcaption>
                    <button class="btnContainer">Comprar</button>
                </div>
                <div class="box">
                    <img src="images/bone_based_bege.jpg" alt="Boné Based" style="width: 250px;">
                    <figcaption>Boné Based</figcaption>
                    <h1 class="price"><span>R$</span> 79, <span>99</span></h1>
                    <button class="btnContainer">Comprar</button>
                </div>
                <div class="box">
                    <img src="images/short_based_preto.jpg" alt="Short Based" style="width: 250px;">
                    <h1 class="price"><span>R$</span> 99, <span>99</span></h1>
                    <figcaption>Short Based</figcaption>
                    <button class="btnContainer">Comprar</button>
                </div> -->
                </div>
            </div>

        </div>
    </div>
</body>

</html>