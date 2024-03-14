<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <main>

        <label class="titulo">Gerador de Números Aleatórios</label>

        <section class="conteudo">

            <div>Clique no botão abaixo para gerar um valor aleatório entre 0 até 100</div>

            <?php

                session_start();

                $init = $_SESSION["init"] ?? false;

                $val = "";

                if ($init == true) {
                    $val = rand(0, 100);
                    echo "<div>O valor gerado foi <b> $val </b></div>";
                } else {
                    $_SESSION["init"] = true;
                }

            ?>

            <input class="input-botao" type="button" onclick="location.reload()" value="Gerar Valor">

        </section>

    </main>

</body>
</html>