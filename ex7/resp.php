<?php
    $valor = $_POST['valor'];
    $cont = 0;
    $soma = 0;
    do{
        $valor++;
        if($valor % 2 == 0){
            $cont++;
            $somaant = $soma;
            $soma += $valor;
            echo "$cont) $somaant + $valor = $soma <br>";
        }
        if($cont == 50){
            break;
        }
        continue;
        
    }while($cont <= 50);

    echo "Valor Total da Soma: $soma";
?>