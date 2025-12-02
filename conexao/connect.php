<?php
$conn = mysqli_connect("localhost", "root", "", "projetoweb", 3307);

if(!$conn){
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
