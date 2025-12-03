<?php
require_once "../conexao/connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM contato WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Produto deletado com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao deletar: " . mysqli_error($conn);
    }
} else {
    echo "ID do produto não informado.";
}
?>
