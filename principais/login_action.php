<?php
session_start();
include("conexao/connect.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT * FROM users WHERE Email = '$email'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) === 1){
    
    $user = mysqli_fetch_assoc($result);

    
if(password_verify($senha, $user['Senha'])) {
    
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_nome'] = $user['Nome'];
    header("Location: ../../index.php"); 
    exit;
}
    }


header("Location: login.php?erro=1");
exit;
