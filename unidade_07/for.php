<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
       <?php 
        
        for ($i = 1 ; $i <=6; $i++ ){
          $sorteio = rand(1,60);
          echo $sorteio . " " ;
        }
         
       ?>

     
    </body>
</html>