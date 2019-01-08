<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php  //Função com retorno 
        
               function calcularDiaria(){
                $salario = 950;
                          
               return number_format( ($salario / 30) , 2 ) ; }    
                       // number_fomrat formata resultados para quantas casas decimais vc quizer  

               $diaria =  calcularDiaria();
               echo "A sua diária é : " . $diaria ;
            
        ?>
    </body>
</html>