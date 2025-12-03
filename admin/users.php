<?php
require_once "../conexao/connect.php";
$sql = "SELECT * FROM users";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style.css?v=1.2">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Usuarios Based</title>
</head>

<body>
    <div class="all">
        <?php include("../principais/header.php"); ?>
        <div class="container">
            <div class="textContainer">
                <h1>Usuarios</h1>
                <div class="gridContainer">
                    <?php
                    $resultado = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($resultado) > 0) {

                        while ($contatos = mysqli_fetch_array($resultado)) {
                            ?>
                            <div class="box">

                                <br>
                                <h3><?= $contatos['id'] ?></h3>
                                <br>
                                <h3>Nome</h3>
                                <span><?= $contatos['Nome'] ?></span>
                                <br>
                                <h3>Senha</h3>
                                <span><?= $contatos['Senha'] ?></span>
                                <br>
                                <h3>Email</h3>
                                <span><?= $contatos['Email'] ?></span>
                                <br>
                                <H3>Endereço</H3>
                                <span><?= $contatos['Endereco'] ?></span>
                                <br>
                                <h3>Gastos</h3>
                                <span><?= $contatos['gastos'] ?></span>
                                <br>


                                <a style="width: 90%;" href="edit_mensagem.php?id=<?= $contatos['id'] ?>"><button
                                        class="btnContainer">Editar</button></a>

                                <br>

                                <a style="width: 90%;" href="delete_mensagem.php?id=<?= $contatos['id'] ?>"
                                    onclick="return confirm('Tem certeza que deseja deletar este produto?')">
                                    <button class="btnContainer">Deletar</button>
                                </a>

                                <br>

                                <a style="width: 90%;" href="add_produto.php"><button class="btnContainer">+ Adicionar Produto</button></a>
                                <br>

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