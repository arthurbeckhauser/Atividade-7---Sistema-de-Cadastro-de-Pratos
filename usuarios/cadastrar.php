<?php
include "../conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    if (empty($nome) || empty($email)) {
        echo "Preencha todos os campos!";
    } else {
        $sql = $conexao->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
        $sql->bind_param("ss", $nome, $email);
        $sql->execute();
        echo "Usuário cadastrado com sucesso!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuários</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <h1>Usuários cadastrados</h1>
        <a href="../index.php">Voltar ao Menu</a>

    <a href="cadastrar.php">Cadastrar usuário</a>

    <br><br>

<form method="POST" action="cadastrar.php">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Cadastrar">
</form>