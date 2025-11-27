<?php
    //1ª etapa - conectando com servidor
    $conexao = mysqli_connect("localhost", "root", "", "", 3307);
    //2ª etapa - selecionando banco de dados
    $db = mysqli_select_db($conexao,"projetoweb");

    if(!$conexao){  
        echo "<h2>Erro ao conectar o banco de dados</h2>";
    }
