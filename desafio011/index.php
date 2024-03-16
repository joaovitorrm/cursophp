<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preço</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Reajustador de Preços</span>

        <?php
        
            $preco = $_GET['preco'] ?? 0;
            $reajuste = $_GET['reajuste'] ?? 0;

            $preco_reajuste = $preco + ($preco * $reajuste / 100);

        ?>

        <form class="conteudo" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>" step="0.01" class="input-numero">
            
            <label for="reajuste">Qual será o percentual de reajuste? (<span id="porcentagem"><?= $reajuste ?></span>%)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" oninput="atualizarPercentual()" value="<?= $reajuste ?>" class="input-range">

            <input type="submit" value="Calcular Reajuste" class="input-botao">

        </form>

    </main>

    <section class="segundo-conteudo">

        <span class="titulo">Resultado do Reajuste</span>

        <p>O produto que custava R$<?= number_format($preco, 2, ',', '.') ?> com <b><?= $reajuste ?>% de aumento</b> vai passar a custar <b>R$<?= number_format($preco_reajuste, 2, ',', '.') ?></b> a partir de agora.</p>

    </section>

</body>

<script lang="javascript">
    function atualizarPercentual() {
        document.querySelector('#porcentagem').innerHTML = document.querySelector('#reajuste').value;
    }
</script>


</html>