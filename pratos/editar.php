<?php
include "../conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $categoria = $_POST["categoria"];

    if (empty($nome) || empty($descricao) || empty($preco) || empty($categoria)) {
        echo "Preencha todos os campos!";
    } else {
        $sql = $conexao->prepare("UPDATE pratos SET nome = ?, descricao = ?, preco = ?, categoria = ? WHERE id = ?");
        $sql->bind_param("ssdsi", $nome, $descricao, $preco, $categoria, $id);
        $sql->execute();
        echo "Prato atualizado com sucesso!";

        header("Location: listar.php");
        exit;
    }
}

$id = $_GET["id"];

$sql = $conexao->prepare("SELECT * FROM pratos WHERE id = ?");
$sql->bind_param("i", $id);
$sql->execute();
$prato = $sql->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Prato</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Editar Prato</h1>
    <a href="listar.php">Voltar ao Listar Pratos</a>
    <br><br>

<form method="POST" action="editar.php">
    <input type="hidden" name="id" value="<?php echo $prato["id"]; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $prato["nome"]; ?>"><br>
    Descrição: <input type="text" name="descricao" value="<?php echo $prato["descricao"]; ?>"><br>
    Preço: <input type="text" name="preco" value="<?php echo $prato["preco"]; ?>"><br>
    Categoria: <input type="text" name="categoria" value="<?php echo $prato["categoria"]; ?>"><br>
    <input type="submit" value="Salvar">
</form>