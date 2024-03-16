<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Anatomia de uma Divisão</span>

        <?php
        
            $dividendo = $_GET['dividendo'] ?? 0;
            $divisor = $_GET['divisor'] ?? 0;

            if ($divisor != 0) {
                $resultado = (int) ($dividendo / $divisor);
                $resto = $dividendo % $divisor;
            } else {
                $resultado = 0;
                $resto = 0;
            }
            
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" class="conteudo" method="get">

            <label for="dividendo">Dividendo</label>
            <input type="number" class="input-numero" value="<?= $dividendo ?>" id="dividendo" name="dividendo">

            <label for="divisor">Divisor</label>
            <input type="number" class="input-numero" value="<?= $divisor ?>" id="divisor" name="divisor">

            <input type="submit" class="input-botao" value="Calcular">
    
        </form>

    </main>

    <section class="segundo-conteudo">

        <span class="titulo">Estrutura da Divisão</span>

        <div class="estrutura-container">
            <div class="divid item"><?= $dividendo ?></div>
            <div class="divis item"><?= $divisor ?></div>
            <div class="resto item"><?= $resto ?></div>
            <div class="resul item"><?= $resultado ?></div>
        </div>

    </section>

</body>
</html>