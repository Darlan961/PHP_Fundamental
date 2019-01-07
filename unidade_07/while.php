<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php 
        $contador = 1 ;
        $contador1 = 1 ;

       while ($contador <= 6 ) {

          $numeros = rand(1,60);
          echo $numeros . "   "; 
          $contador++;
       }
           echo "<br><br>";
      
     do {

        $numeros1 = rand(1,60);
        echo $numeros1 . "   "; 
        $contador1++;
     } while ($contador1  <= 6 );


    ?>
    </body>
</html>