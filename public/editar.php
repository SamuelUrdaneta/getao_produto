<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$stmt = $conexao->prepare("SELECT * FROM produtos WHERE produtos_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$produtos = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produtos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <h2> Editando produtos <?php echo $produtos["nome_produtos"]; ?></h2>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $brinquedo["produtos_id"]; ?>">
        <label for="Nome">Nome:</label>
        <input type="text" name="Nome" value="<?php echo $brinquedo["nome_produtos"]; ?>">
        <br>
        <label for="Categoria">Categoria:</label>
        <input type="text" name="Categoria" value="<?php echo $brinquedo["categoria_produtos"]; ?>">
        <br>
        <label for="Preço">Preço:</label>
        <input type="number" step="0.01" name="Preço" value="<?php echo $brinquedo["preco_produtos"]; ?>">
        <br>
        <label for="Estoque">Quantidade em Estoque:</label>
        <input type="text" name="Estoque" value="<?php echo $brinquedo["estoque"]; ?>">
        <br>
        <button type="submit">Atualizar</button>

    </form>

</body>
</html>