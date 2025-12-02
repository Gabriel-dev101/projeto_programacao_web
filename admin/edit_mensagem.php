<?php
require_once "../conexao/connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contato WHERE id = $id";
    $resultado = mysqli_query($conn, $sql);
    $produto = mysqli_fetch_assoc($resultado);
}

if (isset($_POST['atualizar'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    $update = "UPDATE contato SET title='$title', `desc`='$desc', price='$price' WHERE id=$id";
    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Produto atualizado com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
        <link rel="stylesheet" href="../style.css?v=1.2">
</head>
<body>
    <div class="container" style="max-width: 600px; display:flex; flex-direction:column;">
        <h1>Editar Produto</h1>
        <form class="contactForm" style="color: #EFE3D6;"  method="POST">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <label>Nome:</label><br>
            <input type="text" name="title" value="<?= $produto['nome'] ?>"><br><br>

            <label>Email:</label><br>
            <textarea name="desc"><?= $produto['email'] ?></textarea><br><br>

            <label>Número:</label><br>
            <textarea name="desc"><?= $produto['numero'] ?></textarea><br><br>

            <label>Mensagem:</label><br>
            <input type="text" name="price" value="<?= $produto['mensagem'] ?>"><br><br>

            <button type="submit" name="atualizar">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
