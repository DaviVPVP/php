<?php
    $num1 = 0;
    $num2 = 3;

    function somar($num1, $num2){
        return $num1 + $num2;
    }//fim do somar

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do subtrair

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do multiplicar

    function dividir($num1, $num2){
        if($num2 <= 0){
            return "Impossivel dividir por zero!";
        }else{
            return $num1 / $num2;
        }
    }//fim do dividir

    function escolher($num1){
        switch($num1){
            case 1:
                return "Rosa";
                break;
            case 2: 
                return "Preto";
                break;
            case 3:
                return "White";
                break;
            default:
                return "Cor não identificada";
                break;
        }//fim do switch
    }//fim do escolher

    function binario($decimal){
        $binario = "";
        while($decimal >= 1){
            $binario .= $decimal % 2;
            $decimal = $decimal / 2;
        }

        return strrev($binario);
    }//fim da conversão

    function reverse($binario){
        $decimal = "";
        while($binario)
    }

    //Imprimir os dados na tela
    echo "<br>A soma dos números é: ".somar(5,6);
    echo "<br>A subtração dos números é: ".subtrair(5,6);
    echo "<br>A multiplicação dos números é: ".multiplicar(5,6);
    echo "<br>A divisão dos números é: ".dividir(6,7);
    echo "<br>A escolha é: ".escolher(2);
    echo "<br>O valor em binário é: ".binario(250);
    echo "<br>O valor em decimal é: ".reverse(1100;)


?>