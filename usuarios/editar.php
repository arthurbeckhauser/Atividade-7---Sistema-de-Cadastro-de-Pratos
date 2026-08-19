<?php
include "../conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    if (empty($nome) || empty($email)) {
        echo "Preencha todos os campos!";
    } else {
        $sql = $conexao->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
        $sql->bind_param("ssi", $nome, $email, $id);
        $sql->execute();

        header("Location: listar.php");
        exit;
    }
}

$id = $_GET["id"];

$sql = $conexao->prepare("SELECT * FROM usuarios WHERE id = ?");
$sql->bind_param("i", $id);
$sql->execute();

$usuario = $sql->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<h2>Editar Usuário</h2>

<form method="POST" action="editar.php">

    <input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">

    Nome:
    <input type="text" name="nome" value="<?php echo $usuario["nome"]; ?>">
    <br>

    Email:
    <input type="text" name="email" value="<?php echo $usuario["email"]; ?>">
    <br>

    <input type="submit" value="Salvar">

</form>

</body>
</html>