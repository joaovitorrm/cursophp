<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritiméticas</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Médias Aritiméticas</span>
        
        <?php
        
            $valor1 = $_GET['valor1'] ?? 0;
            $peso1 = $_GET['peso1'] ?? 1;
            $valor2 = $_GET['valor2'] ?? 0;
            $peso2 = $_GET['peso2'] ?? 1;

            $media_simples = ($valor1 + $valor2) / 2;
            $media_composta = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
        
        ?>

        <form class="conteudo" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    
            <label for="valor1">informe o 1º valor</label>
            <input class="input-numero" type="number" step="0.01" name="valor1" id="valor1" value="<?= $valor1 ?>">

            <label for="peso1">informe o 1º peso</label>
            <input class="input-numero" type="number" step="0.01" min="1" name="peso1" id="peso1" value="<?= $peso1 ?>">

            <label for="valor2">informe o 2º valor</label>
            <input class="input-numero" type="number" step="0.01" min="1" name="valor2" id="valor2" value="<?= $valor2 ?>">

            <label for="peso2">informe o 2º peso</label>
            <input class="input-numero" type="number" step="0.01" name="peso2" id="peso2" value="<?= $peso2 ?>">

            <input class="input-botao" type="submit">

        </form>

    </main>

    <section class="segundo-conteudo">

        <span class="titulo">Cálculo da médias</span>

        <p>Com base nos valores <?= $valor1 ?> e <?= $valor2 ?> temos:</p>

        <ul>
            <li>A <b>Média Aritimética Simples</b> entre os valores é igual a <?= number_format($media_simples, 2, ',', '.') ?></li>
            <li>A <b>Média Aritimética Composta</b> entre os valores é igual a <?= number_format($media_composta, 2, ',', '.') ?></li>
        </ul>


    </section>

</body>
</html>