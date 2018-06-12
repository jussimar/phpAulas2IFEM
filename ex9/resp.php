<?php
    $salarioInicial = $_POST['salario'];
    $aumento = 0.015;
        
    for ($i = 2006; $i <= 2018; $i++) {
         $salarioAtual = $salarioInicial * $aumento;
         
         $aumento *= 2;
    }
    
    echo "O salario atual e: $salarioAtual";
?>