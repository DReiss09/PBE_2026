<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
</head>
<body>
    <h1>produto Cadastrado</h1>
    <p>Nome: <?= $produto->getNome() ?></p>
    <p>Quantidade: <?= $produto->getQuantidade() ?></p>
    <p>Preço: <?= $produto->getPreco() ?></p>
    <p>Total em estoque: <?= $produto->calculoTotal() ?></p>

    <a href="view.php">Cadastrar outor</a>
</body>
</html>


