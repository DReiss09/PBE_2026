<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular Média do Aluno</h1>
    <p><b>nome: </b> <?= $nome ?> </p>
    <p><b>nome: </b> <?= $nota1 ?> </p>
    <p><b>nome: </b> <?= $nota2 ?> </p>
    <p><b>nome: </b> <?= $nota3 ?> </p>

    <?php if($media >= 7): ?>
        <p>aprovado !!</p>
    <php else : ?>
        <p>reprovado</p>
    <?php endif ?>

    <?php if($media == 10): ?>
        <p>voçê atingiu a nota maxima!!</p>
        <?php endif ?>
</body>
</html>

