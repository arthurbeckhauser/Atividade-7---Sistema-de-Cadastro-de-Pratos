<?php

require_once "../conexao.php";

$sql = "SELECT id, nome, email FROM usuarios ORDER BY id DESC";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <h1>Usuários cadastrados</h1>
        <a href="../index.php">Voltar ao Menu</a>

    <a href="cadastrar.php">Cadastrar usuário</a>

    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>

        <?php while ($usuario = $resultado->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
            </tr>

        <?php } ?>

    </table>

</body>
</html>