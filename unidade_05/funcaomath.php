

<?php 
       
    $gasolina = 4.78957;

    $salario = 800;
    $meses   = 3;
    $valores = array(55,44,56,45,33,28);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Trimestre : " . $salario * $meses . "<br>" ;  
            echo "Quinzena :  " . $salario / 2  . "<br>" ;  


            echo "<br><br><br>";
            // Exponencial
            $exponencial = pow(5,2);
            echo "Potencia : " . $exponencial . "<br>";
            

            echo "<br><br><br>";
            // Raiz Quadrada
            echo "Raiz : " . sqrt($exponencial) . "<br>"; 
            

            echo "<br><br><br>";
            // Randômico Generica
            $randomico = rand();
            echo $randomico ."<br>";


            echo "<br><br><br>";
            // Randômico entre um intervalo
            $randomico2 = rand(5,20);
            echo $randomico2 ."<br>";


            echo "<br><br><br>";            
            // Valor absoluto ou seja tranforma negativo para positivo 
             $negativo = -13;
             $absoluto = abs($negativo);
             echo "Valor absoluto : " . $absoluto . "<br>"; 
             

             echo "<br><br><br>";
            //Formas de arredondamento 
            echo "Arredondamento round : " . round($gasolina) . "<br>";
            echo "Arredondamento ceil : " . ceil($gasolina) . "<br>";
            echo "Arredondamento floor : " . floor($gasolina). "<br>";

            
            echo "<br><br><br>";
            // Encontrando valores minimos e maximos de uma coleçã de dados 
            $minimo = min($valores);        
            $maximo = max($valores);
            echo " valor minimo do array : " . $minimo ."<br>" ;  
            echo " valor maximo do array : " . $maximo ."<br>" ;  


        ?>
    </body>
</html>