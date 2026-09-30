<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 7</title>
</head>

<body>
    <h1>Carrinho de compras</h1>
    <br>
    <br>
    <h2>Dados do cliente</h2>
   <form action="logica.php" method="POST">
        <label for="">Nome :</label> 
        <br>
        <input type="text" name="nome">
        <br><br>
        <br>
        <h2>Produto 1</h2>
         <label for="">nome do produto:</label>
         <br>
         <input type="number" name="Nome_produto1">
         <br><br>
         <label for="">Preço:</label>
         <br>
         <input type="number" name="preco1">
         <br><br>
         <label for="">Quantidade:</label>
         <br>
         <input type="number" name="quantidade1">
         <br><br>
         <br>
          <h2>Produto 2</h2>
         <label for="">nome do produto:</label>
         <br>
         <input type="number" name="Nome_produto2">
         <br><br>
         <label for="">Preço:</label>
         <br>
         <input type="number" name="preco2">
         <br><br>
         <label for="">Quantidade:</label>
         <br>
         <input type="number" name="quantidade2">
        <br><br>
        <br>
         <h2>Produto 3</h2>
         <label for="">nome do produto:</label>
         <br>
         <input type="number" name="Nome_produto3">
         <br><br>
         <label for="">Preço:</label>
         <br>
         <input type="number" name="preco3">
         <br><br>
         <label for="">Quantidade:</label>
         <br>
         <input type="number" name="quantidade3">
         <br><br>
        <button type="submit">Finalizar Compra</button>
    </form>
</body>
</html>