<?php
require_once "../conexao/connect.php";

if (isset($_POST['salvar'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $image = $_POST['image']; 
    $estoque = $_POST['estoque']; 

    $sql = "INSERT INTO produtos (title, `desc`, price, image, estoque) VALUES ('$title', '$desc', '$price', '$image', '$estoque')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Produto adicionado com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao adicionar: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="../style.css?v=1.2">
</head>
<body>
    <div class="container" style="max-width: 600px; display:flex; flex-direction:column;">
        <h1>Adicionar Novo Produto</h1>
        <form class="contactForm" style="color: #EFE3D6;" method="POST">
            <label>Título:</label><br>
            <input type="text" name="title" required><br><br>

            <label>Descrição:</label><br>
            <textarea name="desc" required></textarea><br><br>

            <label>Preço:</label><br>
            <input type="number" step="0.01" name="price" required><br><br>

            <label>Imagem (URL):</label><br>
            <input type="text" name="image" placeholder="ex: imagens/produto.jpg"><br><br>

             <label>Estoque</label><br>
            <input type="text" name="estoque" placeholder="ex: 10"><br><br>

            <button type="submit" name="salvar">Salvar Produto</button>
        </form>
    </div>
</body>
</html>
