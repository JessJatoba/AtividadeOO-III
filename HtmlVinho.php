<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bebidas</title>
</head>
<body>
    <h3>Cadastro de Bebidas</h3>
    <form method="POST" action="ClasseVinho.php">
    <label for="tipo">Tipo de Bebida:</label>
    <select name="tipo" id="tipo">
        <option value="vinho">Vinho</option>
        <option value="refrigerante">Refri</option>
        <option value="suco">Suco</option>
    </select><br><br>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label for="marca">Marca:</label>
    <input type="text" name="marca" required><br><br>

    <label for="volume">Volume (em litros):</label>
    <input type="number" name="volume" step="0.1" required><br><br>

    <label for="preco">Preço:</label>
    <input type="number" name="preco" step="0.01" required><br><br>

    <input type="submit" value="Cadastrar Bebida">
</form>

</body>
</html>



