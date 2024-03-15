<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Conversor de Moeda</span>

        <section class="conteudo">

            <?php 
                $dolar = 4.99;
                $dinheiro = $_GET["dinheiro"] ?? 0;

                $conversao = (string) round($dinheiro / $dolar, 2);

                $dinheiro = number_format($dinheiro, 2, ",", ".");
                $conversao = number_format($conversao, 2, ".", ",");                
                $dolar = number_format($dolar, 2, ",", ".");
                
            ?>            

            <p><?php echo "Seus R$ $dinheiro equivalem à US$ $conversao"?></p>
            <span><?php echo "*Cotação fixa de R$ " . $dolar . " por dolár." ?></span>
            <input class="input-botao" onclick="history.go(-1)" value="Voltar">

        </section>
    </main>

</body>
</html>