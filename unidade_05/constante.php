
    <?php  // Definindo uma constante 
         
       define("MAX", 50.45); 
       define("NOME" , "Olá Mundo");

      
    ?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      
    <?php 
       echo NOME . "<br>"; 
       echo "Imprimindo a constante MAX : " . MAX ;  
    ?>

    </body>
</html>