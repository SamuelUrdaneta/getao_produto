<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];

$sql = "INSERT INTO brinquedos (nome_produtos, categoria_produtos, preco_produtos, estoque) VALUES (?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);

$stmt->bind_param( "ssdi", $nome, $categoria, $preco, $estoque);

$stmt->execute();

$stmt->close();
$conexao->close();

header("Location: ../index.php");
exit;

?>