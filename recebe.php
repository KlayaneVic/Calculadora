<?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacao = $_POST["operacao"];
        $resultado = 0;
        if($operacao == "soma"){
            $resultado = $num1 + $num2;

        }else if($operacao == "subtracao"){
            $resultado = $num1 - $num2;

        }else if($operacao == "multiplicacao"){
            $resultado = $num1*$num2;
        }else{
            $resultado = $num1/$num2;
        }
        echo "O resultado da operação é: $resultado";
?>