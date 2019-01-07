<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
       <?php 
         $pessoas = array("Darlan", "pedro", "maria", "joão");

         foreach($pessoas as $var){
             echo $var . "  ";
         }

     echo "<br><br>";

     // foreach  para associative array 
      $objetos = array( "nome " => "darlan" , 
                            "salario "=>800.50,
                            "cargo "=> "programador"
        );
         
        foreach($objetos as $indece => $valor){
             echo $indece . $valor . "<br>" ;
        }
         
       ?>

     
    </body>
</html>