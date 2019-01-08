<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php //FUNÇÃO COM MULTIPLOS RETORNOS  
           
           function calcularDiaria($salario, $dias, $cotacao ){
               $real = number_format( ($salario / $dias) , 2 ) ;
             
               $dolar = number_format( ( ($salario / $dias) / $cotacao ), 2 ) ; 
         
               return array ($real , $dolar) ;  } 
               // Para retorna uma função com mais de um parâmetro usasse um array onde cada parâmetros   

           $diaria_array =  calcularDiaria(2000 , 30 , 4.24);

           echo "A sua diária em $ reais é : " . $diaria_array[0] . "<br>";
           
           echo "A sua diária em dolar US é : " . $diaria_array[1] . "<br><br>";


           //Funçã com multiplos retornos usando list 

           function calcular($numero1 , $numero2){
             $soma = $numero1 + $numero2;
             $mul = $numero1 * $numero2;

             return array($soma , $mul) ; // retornando soma e multiplicação 
            }

             list($soma , $mult) = calcular(5,5); 
             // criando uma lista nos elementos da lista estão sendo guardados os valores da função que retorna multiplos 
             //retornos 

             echo "A soma será de : " . $soma . "<br>" ;
             echo "A multiplicação será de : " . $mult . "<br>";
              
           

        ?>
    </body>
</html>