<?php
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    
    $imc = $peso / ($altura ^ 2);
    
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Peso: $peso <br>";
    echo "Altura: $altura <br>";
    
    if($imc < 17){
        echo "Imc: $imc : Voce esta muito abaixo do peso";
    }else if($imc >= 17 && $imc <= 18.49){
         echo "Imc: $imc : Voce esta abaixo do peso";
    }else if($imc >= 18.5 && $imc <= 24.99){
        echo "Imc: $imc : Voce tem um peso normal";
    }else if($imc >= 25 && $imc <= 29.99){
         echo "Imc: $imc : Voce esta acima do peso";
    }else if($imc >= 30 && $imc <= 34.99){
        echo "Imc: $imc : Voce possui obesidade I";
    }else if($imc >= 35 && $imc <= 39.99){
        echo "Imc: $imc : Voce possui obesidade II (Severa)";
    }else{
        echo "Imc: $imc : Voce possui obesidade III (Morbida)";
    }
    

?>