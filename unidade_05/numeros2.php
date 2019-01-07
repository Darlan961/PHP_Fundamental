<?php
    $salario = 800;
    $gasolina = 2.795627;
    $nome = "Dalan";
    $fumante = true;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "É um número ? : " . is_numeric($salario) . "<br>";
            echo "É um número ? : " . is_numeric($gasolina) . "<br>";
            echo "É um número ? : " . is_numeric($fumante) . "<br>";
            echo "É um número ? : " . is_numeric($nome) . "<br><br>";
      
            // testar  se é inteiro
            echo "É um número inteiro ? : " . is_int($salario) . "<br>";
            echo "É um número inteiro ? : " . is_int($gasolina) . "<br>";
            echo "É um número inteiro ? : " . is_int($nome) . "<br> <br>";
        
            // testar se é float
        
            echo "E um número float ? : " . is_float($salario) . "<br>";
            echo "E um número float ? : " . is_float($gasolina) . "<br> <br> ";
 
        ?>
        
        
    </body>
</html>