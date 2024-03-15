<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

    <main>

        <div class="titulo">Analisador de Número Real</div>

        <section class="conteudo">

            <?php
            
                $valor = $_GET["valor"] ?? 0;
                $inteira = (int) $valor;
                $fracionaria = $valor - $inteira;

                $valor = number_format($valor, 3, ",", ".");
                $inteira = number_format($inteira, 0, ",", ".");
                $fracionaria = number_format($fracionaria, 3, ",", ".");

            ?>

            <div>O número digitado foi <?= $valor ?></div>

            <ul>
                <li>A parte inteira do número é <?= $inteira ?> </li>
                <li>A parte fracionária do número é <?= $fracionaria ?></li>
            </ul>

            <input type="button" class="input-botao" value="Voltar" onclick="history.go(-1)">

        </section>

    </main>

</body>
</html>