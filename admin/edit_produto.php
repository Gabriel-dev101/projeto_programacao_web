<?php
require_once "../conexao/connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $resultado = mysqli_query($conn, $sql);
    $produto = mysqli_fetch_assoc($resultado);
}

if (isset($_POST['atualizar'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $image = $_POST['image']; 
    $estoque = $_POST['estoque'];

    $update = "UPDATE produtos SET title='$title', `desc`='$desc', price='$price', image='$image', estoque='$estoque' WHERE id=$id";
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
            <label>Título:</label><br>
            <input type="text" name="title" value="<?= $produto['title'] ?>"><br><br>

            <label>Descrição:</label><br>
            <textarea name="desc"><?= $produto['desc'] ?></textarea><br><br>

            <label>Preço:</label><br>
            <input type="text" name="price" value="<?= $produto['price'] ?>"><br><br>

            <label>Imagem (URL):</label><br>
            <input type="text" name="image" value="<?= $produto['image'] ?>"><br><br> 

            <label>Estoque</label><br>
            <input type="text" name="estoque" value="<?= $produto['estoque'] ?>"><br><br>

            <button type="submit" name="atualizar">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
