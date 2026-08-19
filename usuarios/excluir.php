<?php

require_once "../conexao.php";

$id = $_GET["id"];

$sql = $conexao->prepare("DELETE FROM usuarios WHERE id = ?");
$sql->bind_param("i", $id);
$sql->execute();

header("Location: listar.php");
exit;

?>