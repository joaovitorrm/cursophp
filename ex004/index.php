<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Formulário</title>
</head>
<body>
    
    <h1>Cadastro de Usuário</h1>
    <hr>

    <form action="result.php" method="get">
    <table style="border: 0.2vmin solid black;border-radius: 1rem;padding: 0.8rem">
        <thead>
            <th>Cadastro</th>
        </thead>
        <tbody>
            <tr><td> Nome </td></tr>
            <tr><td> <input type="text" name="nome"> </td></tr>
            <tr><td> Sobrenome</td></tr>
            <tr><td> <input type="text" name="sobrenome"> </td></tr>
            <tr><td><input type="submit" value="Enviar" style="width: 100%; margin-top: 0.5rem; height: 1.8rem;"></td></tr>            
        </tbody>
    </table>
    </form>

</body>
</html>