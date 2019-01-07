<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
       <?php 
       $numeros = []; // vetor vasio 
       $cont = 1;
       while ($cont <= 6) { 
        
            $sorteio = rand(1,60); // gerando numeros aleatórios 
            
            if (  !in_array($sorteio, $numeros)){ // a exclamação é negação ou seja se tal coisa não existir no array 
                $numeros[] = $sorteio ;
                $cont++;
            }            
        }         
        
        foreach ($numeros as $valor) {
            echo $valor . "  ";
        }
       ?>

        
     
    </body>
</html>