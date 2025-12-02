<?php
session_start();
include("conexao/connect.php"); 
$sql = "SELECT * FROM produtos LIMIT 3";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Based Site</title>
</head>
<body>
    <div class="all">
          <?php include("principais/header.php"); ?>
        <div class="container">
            <div class="principalContainer">
                <div class="textContainer">
                    <h3 class="welcome">Bem-Vindo!</h3>
                    <h1>O essencial, com presença. ISSO É BASED!</h1>
                    <p>Seja bem-vindo à based — onde estilo e atitude se encontram.
                    Aqui, cada peça foi pensada para quem vive com autenticidade e não tem medo de se destacar. Nossa missão é vestir pessoas que sabem quem são e expressam isso através do que usam.
                    Explore nossas coleções e encontre roupas que combinam com a sua essência. Na based, o seu estilo é a nossa base. 
                    </p>
                    <button class="btnContainer">
                      <i class="fa-solid fa-web-awesome"></i>
                        Comprar</button>
                </div>
                <div class="logoContainer">
                    <img src="images/ChatGPT Image 27 de mai. de 2025, 16_12_45.png" alt="">
                </div>
            </div>
        </div>

        <div class="container">
             <div class="textContainer">
                <h1>Sobre Nós</h1>
                <p>
                    A based é uma marca fictícia criada exclusivamente para um projeto acadêmico, com o objetivo de desenvolver um site completo para uma loja de roupas conceito.

    Este projeto não possui fins comerciais nem realizará vendas reais. Todas as imagens utilizadas no site têm finalidade estritamente educacional e ilustrativa, como parte da proposta de simular a construção de uma identidade visual e de uma experiência de navegação para o usuário.

    Não há intenção de lucro, e todos os direitos autorais das imagens e elementos utilizados estão devidamente referenciados no arquivo README.md do projeto.

    A based representa uma marca criada com propósito criativo, técnico e acadêmico — um exercício de desenvolvimento web com foco em design, usabilidade e comunicação de marca.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="textContainer">
                <h1>Produtos em destaque</h1> 
                <div class="gridContainer">
                      <?php
                    $resultado = mysqli_query($conn, $sql);

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
                                 <form method="post" action="carrinho.php" >
                                    <input type="hidden" name="acao" value="add">
                                    <input type="hidden" name="produto_id" value="<?= $livros['id'] ?>">
                                    <button style="width: 90%;" class="btnContainer" type="submit">Comprar</button>
                                </form>
                            </div>
                   <?php
                        }
                    }
                    ?>
                    <br>
                    <br>    
                    <a href="produtos.php"><button class="btnContainer" style="display: flex; justify-content: center;align-items: center; margin-left: 130px;position: absolute; bottom: -30px; "> 
                        Ver mais</button></a>
            </div>
            </div>
           
        </div>
        <footer>
            <h4>Trabalho Programaçao Web-"Based"</h4>
            <p> Francisco Llarena - Arthur Costa - Gabriel Dantas-Matheus Caldas - Tobias Feitoza </p>

        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>