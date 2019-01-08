<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php //Função com parâmetros 

               function calcularDiaria($salario,$dias){

                return number_format( ($salario / $dias) , 2 ) ; }    

               $diaria =  calcularDiaria(2000 , 15);
               echo "A sua diária é : " . $diaria ;
            
        ?>
    </body>
</html>