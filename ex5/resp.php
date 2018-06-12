<?php
    $sexo = $_POST['sexo'];
    $altura = $_POST['altura'];
    
    if($sexo == "m"){
        $result = (72.7 * $altura) -58; 
    }
    
    if($sexo == "f"){
        $result = (62.1 * $altura) -44.7;
    }
    
    echo "Peso ideal = $result";
?>