<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <main>

        <span class="titulo">Gerador de Números Aleatórios</span>

        <section class="conteudo">

            <p>Clique no botão abaixo para gerar um valor aleatório entre 0 até 100</p>

            <?php

                session_start();

                $init = $_SESSION["init"] ?? false;

                $val = "";

                if ($init == true) {
                    $val = rand(0, 100);
                    echo "<span>O valor gerado foi <b> $val </b></span>";
                } else {
                    $_SESSION["init"] = true;
                }

            ?>

            <input class="input-botao" type="button" onclick="location.reload()" value="Gerar Valor">

        </section>

    </main>

</body>
</html>