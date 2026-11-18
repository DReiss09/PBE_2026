
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerFit</title>
</head>
<body>
    <h1>Matrícula na Academia PowerFit</h1>
    <form action="logica.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required>
        <label for="peso">Peso (kg):</label><br>
        <input type="number" id="peso" name="peso" step="0.1" required>
        <label for="altura">Altura (m):</label><br>
        <input type="number" id="altura" name="altura" step="0.01" required>

        <h1>Dados Matricula</h1>
        <label for="">Plano</label>
        <select name="plano">
            <option valeu="basico">Basico - R$80,00</option>
            <option valeu="plus">Plus - R$120,00</option>
            <option valeu="premium">Premium - R$180,00</option>
       </select>

       <label for="">Quantidade de Meses</label>
       <input type="number" name="meses" min="1" max="12" required>

       <p>Modalidade Extras</p>
       <input type="chekbox" name="modalidades[]" value="natacao"> Natação (+R$60,00)
       <input type="chekbox" name="modalidades[]" value="funcional"> Funcional (+R$40,00)
       <input type="chekbox" name="modalidades[]" value="lutas"> Lutas (+R$50,00)



       <button type="submit">Gerar Matricula</button>

        
    </form>
</body>
</html>