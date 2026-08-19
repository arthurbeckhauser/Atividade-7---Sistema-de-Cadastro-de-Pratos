<?php
$conexao = new mysqli("localhost", "root", "", "restaurante", 6666);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>