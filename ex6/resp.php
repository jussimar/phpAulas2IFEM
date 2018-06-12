<?php
    $salario = $_POST['salario'];
    
    if($salario <= 300){
        echo "Salario atual e:".($salario + $salario*0.5);
    }else{
        echo "Salario atual e:".($salario + $salario*0.3);
    }

?>