<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <main>
        
        <label class="titulo">Conversor de Moeda</label>

        <form class="conteudo" action="conversor.php" method="get">

            <div>Digite um valor em R$ para converter em dólar:</div>

            <input type="number" class="input-numero" step="0.01" name="dinheiro">

            <input type="submit" value="Converter" class="input-botao">

        </form>

    </main>

</body>
</html>