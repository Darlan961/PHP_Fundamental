<?php 
    $lost = array(23,36,21,55,44,33);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      
    <?php 
         foreach ($lost as $valor) {
              echo $valor . " " ;
          }

        echo "<br><br>" ."Menor número do vetor : " . min($lost) . "<br>" ; //Menor número do vetor
        echo  "Maior número do vetor : " . max($lost) . "<br>"; // Maior número do array  
        echo "Soma do array : " . array_sum($lost) . "<br>"; // Soma todos os elementos
   
        sort($lost); // Ordem crescente 
        echo "<br> <br>Ordem crescente<br>";
        foreach ($lost as $valor) {
            echo $valor . " " ;
        }

        rsort($lost); //Ordem decrescente 
        echo "<br> <br>Ordem decrescente<br>";        
        foreach ($lost as $valor) {
            echo $valor . " " ;
        }
           
        shuffle($lost); // Ordem embaralhada 
        echo "<br> <br>Ordem embaralhada<br>";        
        foreach ($lost as $valor) {
            echo $valor . " " ;
        }
    ?>

    </body>
</html>