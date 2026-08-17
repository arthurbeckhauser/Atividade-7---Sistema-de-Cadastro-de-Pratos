<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $categoria = $_POST["categoria"];
    $usuario_id = $_POST["usuario_id"];

    if (empty($nome) || empty($descricao) || empty($preco) || empty($categoria) || empty($usuario_id)) {
        echo "Preencha todos os campos!";
    } else {
        $sql = $conexao->prepare("INSERT INTO pratos (nome, descricao, preco, categoria, usuario_id) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("ssdsi", $nome, $descricao, $preco, $categoria, $usuario_id);
        $sql->execute();
        echo "Prato cadastrado com sucesso!";
    }
}

$usuarios = $conexao->query("SELECT id, nome FROM usuarios");
?>

<form method="POST" action="cadastrar_prato.php">
    Nome do prato: <input type="text" name="nome"><br>
    Descrição: <input type="text" name="descricao"><br>
    Preço: <input type="text" name="preco"><br>
    Categoria: <input type="text" name="categoria"><br>
    Usuário responsável:
    <select name="usuario_id">
        <?php while ($u = $usuarios->fetch_assoc()) { ?>
            <option value="<?php echo $u["id"]; ?>"><?php echo $u["nome"]; ?></option>
        <?php } ?>
    </select><br>
    <input type="submit" value="Cadastrar">
</form>