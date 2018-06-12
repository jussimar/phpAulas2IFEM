<?php
    $a = $_POST['valora'];
    $b = $_POST['valorb'];
    $c = $_POST['valorc'];
    
    //calcula primeiro valor
    if ($a < $b && $a < $c) {
        echo "1 - Valor de A = $a <br>";
        // segundo numero
        if($b < $c){
            echo "2 - Valor de B = $b <br>";
        }else{
             echo "2 - Valor de C = $c <br>";
        }
        // terceiro valor
        if($c > $b){
            echo "3 - Valor de C = $c <br>";
        }else{
            echo "3 - Valor de B = $b <br>";
        }
    }
    else if($b < $a && $b < $c){
        echo "1 - Valor de B = $b <br>";
        if($a < $c){
            echo "2 - Valor de A = $a <br>";
        }else{
             echo "2 - Valor de C = $c <br>";
        }
        if($c > $a){
            echo "3 - Valor de C = $c <br>";
        }else{
            echo "3 - Valor de A = $a <br>";
        }
    }
    
    else if($c < $a && $c < $b){
        echo "1 - Valor de C = $c <br>";
        if($a < $b){
            echo "2 - Valor de A = $a <br>";
        }else{
             echo "2 - Valor de B = $b <br>";
        }
        if($b > $a){
            echo "3 - Valor de B = $b <br>";
        }else{
             echo "3 - Valor de C = $a <br>";
        }
    }    


?>