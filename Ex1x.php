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
        <h1>Calcular MDC e MMC</h1>
        <form action="Ex1x.php" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="n1" required>
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="n2" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
        //função para calcular mdc
        function mdc($a, $b)
        {
            while ($b != 0) {
                $resto = $a % $b;
                $a = $b;
                $b = $resto;
            }
            return $a;
        }

        //função para calcular mmc
        function mmc($a, $b)
        {
            return $a * ($b / mdc($a, $b));
        }

        //se existir os valores 1 e 2 capturados pelo GET executa mdc e mmc, e então exibe o resultado ao usuário
        if (isset($_GET['valor1']) == true && isset($_GET['valor1']) == true) {
            $num1 = (float) $_GET['valor1'];
            $num2 = (float) $_GET['valor2'];

            echo  '<h3>MDC(' . $num1 . ',' . $num2 . ') = ' . mdc($num1, $num2) . '</h3>';
            echo  '<h3>MMC(' . $num1 . ',' . $num2 . ') = ' . mmc($num1, $num2) . '</h3>';
        }
        ?>
    </div>

</body>

</html>