<?php
include "../conexao.php";

$sql = "SELECT pratos.id, pratos.nome, pratos.descricao, pratos.preco, pratos.categoria, usuarios.nome AS responsavel
        FROM pratos
        INNER JOIN usuarios ON pratos.usuario_id = usuarios.id";
$resultado = $conexao->query($sql);
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Cadastrado por</th>
        <th>Ações</th>
    </tr>
    <?php while ($prato = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $prato["nome"]; ?></td>
        <td><?php echo $prato["descricao"]; ?></td>
        <td><?php echo $prato["preco"]; ?></td>
        <td><?php echo $prato["categoria"]; ?></td>
        <td><?php echo $prato["responsavel"]; ?></td>
        <td>
            <a href="editar.php?id=<?php echo $prato["id"]; ?>">Editar</a>
        </td>
    </tr>
    <?php } ?>
</table>