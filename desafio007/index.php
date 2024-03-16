<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salários Mínimos</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Informe seu Salário</span>
        
        <?php 
            $sal_minimo = 1380;

            $salario = $_GET['salario'] ?? 0;

            $qtd_salarios = (int) ($salario / 1380);

            $resto = $salario - ($sal_minimo * $qtd_salarios);
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="conteudo">

            <label for="salario">Salário (R$)</label>
            <input type="number" class="input-numero" name="salario" id="salario" value="<?= $salario ?>">
            <p>Considerando o salário mínimo de R$ <?= number_format($sal_minimo, 2, ',', '.') ?> </p>
            <input type="submit" class="input-botao" value="Calcular">

        </form>

    </main>

    <section class="segundo-conteudo">
        <span class="titulo">Resultado Final</span>
        <p>Quem recebe um salário de R$ <?= number_format($salario, 2, ',', '.') ?> ganha <?= $qtd_salarios ?> salários mínimos + R$ <?= number_format($resto, 2, ',', '.') ?> </p>
    </section>

</body>
</html>