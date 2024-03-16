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
        
            $total_seg = $_GET['total_seg'] ?? 0;
            
            $semanas = ($total_seg / 60 / 60 / 24 / 7);
            $dias = ($semanas - (int) $semanas) * 7;
            $horas = ($dias - (int) $dias) * 24;
            $minutos = ($horas - (int) $horas) * 60;
            $segundos = ($minutos - (int) $minutos) * 60;

        ?>

        <form class="conteudo" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="total_seg">Total de tempo em segundos</label>
            <input type="number" name="total_seg" id="total_seg" value="<?= $total_seg ?>" class="input-numero">

            <input type="submit" value="Calcular o Tempo" class="input-botao">

        </form>

    </main>

    <section class="segundo-conteudo">

            <span class="titulo">Total de tempo</span>

            <p>Os <?= number_format($total_seg, 0, ',', '.') ?> segundos equivalem a um total de:</p>

            <ul>
                <li><?= (int) $semanas ?> Semanas</li>
                <li><?= (int) $dias ?> Dias</li>
                <li><?= (int) $horas ?> Horas</li>
                <li><?= (int) $minutos ?> Minutos</li>
                <li><?= (int) $segundos ?> Segundos</li>
            </ul>

        </section>

</body>
</html>