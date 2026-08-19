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

<form method="POST" action="cadastrar_usuario.php">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Cadastrar">
</form>