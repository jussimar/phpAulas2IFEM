<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
        $a = $_POST['valora'];
        $b = $_POST['valorb'];
        $c = $_POST['valorc'];
        $d = $_POST['valord'];
        
        $somaAC = $a + $c;
        
        $multBD = $b * $d;
        
        if($somaAC > $multBD){
            printf("A+C é maior que B*D");
        }
        
        if($somaAC < $multBD){
            printf("A+C é menor que B*D");
        }
        
        if($somaAC == $multBD){
             printf("A+C é igual a B*D");
        }

    ?>
</body>
</html>
