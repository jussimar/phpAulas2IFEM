<?php
    $selecionado = $_POST['op'];
    
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    switch ($selecionado) {
        case 1:
            echo" Resultado: ".($valor1 + $valor2);
            break;
        case 2:
            echo" Resultado: ".($valor1 - $valor2);
            break;
        case 3:
            echo" Resultado: ".($valor1 * $valor2);
            break;
        case 4:
            echo" Resultado: ".($valor1 / $valor2);
            break;
    }
?>