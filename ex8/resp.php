<?php
    $valor = $_POST['valor'];
    $i = 0;
    while($i <=10){
        
        echo "$valor X $i  = ".($valor * $i)."<br>";
        
        $i++;
    }

?>