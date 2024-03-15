<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor e Antecessor</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <div class="titulo"> Antecessor e Sucessor </div>

        <section class="conteudo"> 

            <?php
                $val = $_GET['valor'] ?? 0;
            ?>
            
            <div> O Valor digitado foi <?= (int) $val ?> </div>
            <div> Seu antecessor é <?= (int) $val - 1 ?> </div>
            <div> Seu sucessor é <?= (int) $val + 1?> </div>
            

            <input class="input-botao" value="Voltar" type="button" onclick="history.go(-1)">

        </section>
        
    </main>

</body>
</html>