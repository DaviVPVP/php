<?php
    $num1 = 0;
    $num2 = 3;

    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do somar

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do subtrair

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do multiplicar

    function dividir($num1,$num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
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

    function converterBinario($decimal){
        $binario = "";
        while($decimal >= 1){
            $binario .= $decimal % 2;
            $decimal = $decimal / 2;
        }
        return strrev($binario);
    }//fim da conversão

    function converterDecimal($binario){
        $tamanho = strlen($binario);
        $j = $tamanho - 1;
        $i = 0;
        $decimal = 0;
        while($i < $tamanho){
            if(substr($binario,$i,1) == "1"){
                $decimal += pow(2,$j);
            }                                                                                                                
            $j--;
            $i++; 
        }
        return $decimal;
    }//fim da conversão de binário para decimal

    function converterDecimalHexa($decimal){
        $hexa = "";
        $resto = 0;
        while($decimal >= 1){
            $resto   = $decimal % 16;
            $decimal = $decimal / 16;

            switch($resto){
                case 10:
                    $hexa .= "A";
                    break;
                case 11:
                    $hexa .= "B";
                    break;
                case 12:
                    $hexa .= "C";
                    break;
                case 13:
                    $hexa .= "D";
                    break;
                case 14:
                    $hexa .= "E";
                    break;
                case 15:
                    $hexa .= "F";
                    break;
                default:
                    $hexa .= $resto;
                    break;
            }//fim do switch
        }//fim do while

        return strrev($hexa);
    }//fim do método

    function converterHexaDecimal($hexa){
        $tamanho = strlen($hexa) - 1;
        $j = $tamanho;
        $i = 0;
        $num = "";
        $decimal = 0;
        while($i <= $tamanho){
            $num = substr($hexa,$i,1);
            switch($num){
                case "A":
                    $num = 10;
                    break;
                case "B":
                    $num = 11;
                    break;
                case "C":
                    $num = 12;
                    break;
                case "D":
                    $num = 13;
                    break;
                case "E":
                    $num = 14;
                    break;
                case "F":
                    $num = 15;
                    break; 
            }
            
            $decimal += $num * pow(16,$j);
            $j--;
            $i++;
        }
        return $decimal;
    }//fim do método

    //Exercício 2
    function impar($num1){
        if($num1 % 2 == 0){
            return "Par!";
        }else{
            return "Impar!";
    }
    }//Fim do 2

    //Exercício 3
    function maiormenor($num1){
        if($num1 >= 18 ){
            return "Maior";
        }else{
            return "Menor";
    }
    }//Fim do 3

    //Exercício 4  
    function duplicar($num1){
        return $num1 * 2;
    }//Fim do 4 

    //Exercício 5
    function celsius($num1,$num2){
        $num2 = 9/5 * $num1;
        return $num2 + 32;
    }//Fim do 5

    //Exercício 6
    function maiordeTres($num1,$num2,$num3){
        if($num1 > $num2 && $num1 > $num3){
            return $num1;
        }else if($num2 > $num1 && $num2 > $num3){
            return $num2; 
        }else{
            return $num3; 
        }
    }//Fim do 6

    //Exercício 7
    function positivionegativozero($num1){
        if($num1 < 0){
            return "Negativo";
        }else if($num1 == 0)
            {return "Zero";
    }else{
        return "Positivo"; 
    }
    }//Fim do 7
 
    //Exercício 8
    function tabuada($num1,$num2,$num3){
        $tabuada = '';
        for ($num2 = 1; $num2 <= 10; $num2++) {
            $num3 = $num1 * $num2;
            $tabuada .= "$num1 x $num2 = $num3 ";
        }
        return $tabuada;
    }//Fim do 8

    //Exercício 9
    function newsoma($num1){
        $num2 = 0;
        for ($num3 = 1; $num3 <= $num1; $num3++){
            $num2 += $num3;
        }
        return $num2;
    }//Fim do 9
    
    //Exercício 10
    function primo($num1){
        if ($num1 <= 1){
            return "Não primo!";
        }
        if ($num1 == 2 || $num1 == 3 || $num1 == 5 || $num1 == 7){
            return "Primo!";
        }
        if ($num1 % 2 == 0 || $num1 % 3 == 0 || $num1 % 5 == 0 || $num1 % 7 == 0){
            return "Não primo!";
        }
    }//Fim do 10

    //Exercício 11
    function palindrome($string){
        $original = "mamam";
        if (strrev($string) == $string){
            return "Sim!";
        }else{
            return "Não!";
        }
    }//Fim do 11

    //Exercício 12
    function fatorial($num1){
        $num3 = 1;
        for ($num2 = 1; $num2 <= $num1; $num2++){
            $num3 *= $num2;
        }
        return $num3;
    }//Fim do 12

    //Exercício 13
    function pares($num1){
        $pares = '';
        for ($num2 = 2; $num2 <= $num1; $num2 += 2){
            $pares .= "$num2 ";
        }
        return $pares;
    }//Fim do 13

    //Exercício 14
    function vogais($palavra){
        $vogais = 0;
        $i = 0;
        $j = $tamanho;
        $letra = "";
        $tamanho = strlen($palavra) - 1;
        while($i < $tamanho){
            $letra = substr($palavra, $i, 1);
            switch($letra){
                case "a";
                    $vogais += 1;
                case "A";
                    $vogais += 1;
                    break;
                 case "e";
                    $vogais += 1;
                    break;
                case "E";
                    $vogais += 1;
                    break;
                case "i";
                    $vogais += 1;
                    break;
                case "I";
                    $vogais += 1;
                    break;
                case "o";
                    $vogais += 1;
                    break;
                case "O";
                    $vogais += 1;
                    break;
                case "u";
                    $vogais += 1;
                    break;
                case "U";
                    $vogais += 1;
                    break;
            }//fim do Switch
            $j--;
            $i++;
        }//fim do while
        return $vogais;
    }//Fim do 14

    //Exercício 16
    function data($num1,$num2,$num3){
        if ($num1 < 1 || $num1 > 31){
            return "Data inválida";
        }
        if ($num2 < 1 || $num2 > 12){
              return "Data inválida";
        }
        if ($num3 <= 0){
            return "Data inválida";
         }
        return "Data válida: $num1/$num2/$num3";
    }//Fim do 16

    //Exercício 17
    function mediaCinco($num1,$num2,$num3,$num4,$num5){
         $media = ($num1+$num2+$num3+$num4+$num5)/5;
         return $media;
    }//Fim do 17

    //Exercício 18
    function divisores($num1){
        $num3 = '';
        for ($num2 = 1; $num2 <= $num1; $num2++){
            if ($num1 % $num2 == 0){
                $num3 .= "$num2 ";
            }
        }
        return $num3;
    }//Fim do 18




    



    
    
 
    

    
    
    
    

    
    








    /*
    //Imprimir dos dados na tela
    echo "<br>A soma dos números é: ".somar(5,6);
    echo "<br>A subtração dos números é: ".subtrair(5,6);
    echo "<br>A multiplicação dos números é: ".multiplicar(5,6);
    echo "<br>A divisão dos números é: ".dividir(6,7);
    echo "<br>A escolha é: ".escolher(2);
    echo "<br>A conversão é: ".converterBinario(42);
    echo "<br>A conversão de binário para decimal é: ".converterDecimal("101010");
    echo "<br>A conversão de decimal para hexa é: ".converterDecimalHexa(1000);
    echo "<br>A conversão de hexa para decimal é: ".converterHexaDecimal("3E8");
    echo "<br>Número ".impar("8");
    echo "<br> ".maiormenor("19");
    */
    


?>