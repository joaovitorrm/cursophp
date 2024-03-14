<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor e Antecessor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <main>

        <label class="titulo"> Antecessor e Sucessor </label>

        <section class="conteudo"> 

            <label class="texto-descricao"> O Valor digitado foi <?php echo $_GET["valor"] ?> </label>
            <label class="texto-descricao"> Seu antecessor é <?php echo $_GET["valor"] - 1 ?> </label>
            <label class="texto-descricao"> Seu sucessor é <?php echo $_GET["valor"] + 1 ?> </label>

            <input class="input-botao" value="Voltar" type="button" onclick="history.go(-1)">

        </section>
        
    </main>

</body>
</html>