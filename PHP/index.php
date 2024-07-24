<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1> Cálculos </h1>
    <form method="POST">
        <?php
            include 'funcoes.php';//Conectando com o arquivo de funções
        ?>

        <label>Primeiro número: </label>
        <input type="number" id="num1" name="num1"/><br><br>

        <label>Segundo número: </label>
        <input type="number" id="num2" name="num2"/><br><br>

        <label>Terceiro número: </label>
        <input type="number" id="num3" name="num3"/><br><br>

        <button> Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
            ?>
        </button><br><br>

        <textArea rows="100" cols="40" readOnly>
            <?php
                echo "\nSomar: ".somar($num1,$num2).
                "\nSubtrair: ".subtrair($num1,$num2).
                "\nDividir: ".dividir($num1,$num2).
                "\nMultiplicar: ".multiplicar($num1,$num2).
                "\nEscolher: ".escolher($num1).
                "\nDecimal -> Binário: ".converterBinario($num1).
                "\nDecimal -> Binário: ".converterBinario($num2).
                "\nDecimal -> Hexadecimal: ".converterDecimalHexa($num1).
                "\nDecimal -> Hexadecimal: ".converterDecimalHexa($num2).
                "\nPar ou impar: ".impar($num1).
                "\nMaior ou menor: ".maiormenor($num1).
                "\nDuplicar: ".duplicar($num1).
                "\nC -> F: ".celsius($num1,$num2).
                "\nMaior dos Três: ".maiordeTres($num1,$num2,$num3).
                "\nMaior dos Três: ".positivionegativozero($num1).
                "\nTabuada: ".tabuada($num1,$num2,$num3).
                "\nSoma de um até determinado número: ".newsoma($num1,$num2,$num3).
                "\nPrimo ou Não primo: ".primo($num1).
                "\nFatorial: ".fatorial($num1);



   

;





            ?>
        </textArea>
    </form>
</body>
</html>