<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <main>

        <label class="titulo">Conversor de Moeda</label>

        <section class="conteudo">

            <?php 
                const DOLAR = 4.99;
                $dinheiro = $_GET["dinheiro"] ?? 0;

                $conversao = (string) round($dinheiro / DOLAR, 2);

                for ($i = 0; $i < strlen($conversao); $i++) {
                    if ($conversao[$i] == ",") {
                        $conversao[$i] = ".";
                    } else if ($conversao[$i] == ".") {
                        $conversao[$i] = ",";
                    }
                };
                
            ?>            

            <div><?php echo "Seus R$ $dinheiro equivalem à US$ $conversao"?></div>
            <div><?php echo "Cotação fixa de R$ " . DOLAR . " por dolár." ?></div>
            <input class="input-botao" onclick="history.go(-1)" value="Voltar">

        </section>
    </main>

</body>
</html>