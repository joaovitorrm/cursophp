<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Informe um número</span>

        <?php
        
            $numero = $_GET['numero'] ?? 0;
            $raiz_quadrada = 0;
            $raiz_cubica = 0;

            if ($numero != 0) {
                $raiz_quadrada = $numero ** (1/2);
                $raiz_cubica = $numero ** (1/3);
            }

        ?>

        <form class="conteudo" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="numero">Número</label>
            <input type="number" value="<?= $numero ?>" name="numero" id="numero" class="input-numero">
            <input type="submit" value="Calcular" class="input-botao">

        </form>

    </main>

    <section class="segundo-conteudo">

        <span class="titulo">Resultado Final</span>

        <p>Analisando o número <?= $numero ?>, temos:</p>

        <ul>
            <li>A sua raiz quadrada é <?= number_format($raiz_quadrada, 3, ',', '.') ?></li>
            <li>A sua raiz cúbica é <?= number_format($raiz_cubica, 3, ',', '.') ?></li>
        </ul>

    </section>

</body>
</html>