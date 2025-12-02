<?php
    //1ª etapa - conectando com servidor
    $conn = mysqli_connect("localhost", "root", "", "", 3306);
    // Mantém compatibilidade com código antigo que use $conexao
    $conexao = $conn;

    //2ª etapa - selecionando banco de dados
    $db = mysqli_select_db($conn, "projetoweb");

    if(!$conn){
        echo "<h2>Erro ao conectar o banco de dados</h2>";
    }