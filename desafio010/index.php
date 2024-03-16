<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Calculadora de Idade</span>

        <?php
        
            $nascimento = $_GET['nascimento'] ?? 0;
            $ano_escolhido = $_GET['ano_escolhido'] ?? date('Y');

            $idade = $ano_escolhido - $nascimento;

        ?>

        <form class="conteudo" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" class="input-numero" value="<?= $nascimento ?>" id="nascimento" name="nascimento">

            <label for="ano_escolhido">Em qual ano você quer saber a sua idade? (atualmente estamos em <?= $ano_escolhido ?>)</label>
            <input type="number" class="input-numero" value="<?= $ano_escolhido ?>" id="ano_escolhido" name="ano_escolhido">

            <input type="submit" class="input-botao" value="Calcular idade">

        </form>

    </main>

    <section class="segundo-conteudo">

        <span class="titulo">Resultado</span>
        <p>Quem nasceu em <?= $nascimento ?> vai ter <b><?= $idade ?> anos</b> em <?= $ano_escolhido ?>!</p>

    </section>

</body>
</html>