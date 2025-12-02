<?php
session_start();
require_once "conexao/connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $senha = isset($_POST["senha"]) ? trim($_POST["senha"]) : "";

    if ($email !== "" && $senha !== "") {
        $emailEsc = mysqli_real_escape_string($conn, $email);
        $senhaEsc = mysqli_real_escape_string($conn, $senha);

        $sql = "SELECT * FROM users WHERE Email = '$emailEsc' AND Senha = '$senhaEsc' LIMIT 1";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $user = mysqli_fetch_assoc($resultado);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['Nome'];

            header("Location: index.php");
            exit;
        } else {
            header("Location: login.php?erro=1");
            exit;
        }
    } else {
        header("Location: login.php?erro=1");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
