<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
    <header><h1>Resultado do Formulário: </h1></header>
    <hr>
    <main>

        <?php 
        
            echo "Nome: " . $_GET["nome"];
            echo "<br>";
            echo "Sobrenome: " . $_GET["sobrenome"];

        ?>

    </main>

</body>
</html>