<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Calculadora de Tempo</span>

        <?php
        
            $valor = $_GET['valor'] ?? 0;
            
            $cem = ($valor / 100);
            $cinquenta = ($cem - (int) $cem) / 50 * 100;
            $dez = ($cinquenta - (int) $cinquenta) / 10 * 50;
            $cinco = ($dez - (int) $dez) / 5 * 10;

        ?>

        <form class="conteudo" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="valor">Total de dinheiro que gostaria de sacar</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>" class="input-numero" step="5">

            <input type="submit" value="Calcular o Tempo" class="input-botao">

        </form>

    </main>

    <section class="segundo-conteudo">

            <span class="titulo">Total de tempo</span>

            <p>Com o pedido de R$<?= number_format($valor, 2, ',', '.') ?> o caixa irá retornar as seguintes notas:</p>

            <ul>
                <li><?= (int) $cem ?> notas de <b>Cem</b></li>
                <li><?= (int) $cinquenta ?> notas de <b>Cinquenta</b></li>
                <li><?= (int) $dez ?> notas de <b>Dez</b></li>
                <li><?= (int) $cinco ?> notas de <b>Cinco</b></li>
            </ul>

        </section>

</body>
</html>