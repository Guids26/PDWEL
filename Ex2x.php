<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Ex.css">
    <title>Calcula MDC e MMC</title>
</head>

<body>
    <div id="div-central">
        <h1>Encontrar múltiplos</h1>
        <form action="Ex2x.php" method="get">
            <label for="valor">Múltiplo de:</label>
            <input type="number" name="valor" id="n1" required>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="n2" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
        //função para gerar multiplos e printar na tela
        function multiplos($valor, $qtde)
        {
            echo'<h3>Multiplos de '.$valor.': ';
            //array para guadar os multiplos
            $multiplos = [];
            for ($i = 0; $i < $qtde; $i++) {
                $multiplos[$i] = $valor * $i;
                echo $multiplos[$i].', ';
            }
            echo '</h3>';
        }

        //se existir os valores 1 e 2 capturados pelo GET executa mdc e mmc, e então exibe o resultado ao usuário
        if (isset($_GET['valor']) == true && isset($_GET['quantidade']) == true) {
            $num1 = (float) $_GET['valor'];
            $num2 = (float) $_GET['quantidade'];
            multiplos($num1, $num2);
        }
        ?>
    </div>

</body>

</html>