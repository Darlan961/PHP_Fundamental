
    <?php
      
       $salada = array("maçã","banana","laranja","pera");
 
   
     ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
          echo $salada[0] . "<br>";
          echo $salada[1] . "<br>";
          echo $salada[2] . "<br>";
          echo $salada[3] . "<br>";
          
          $salada[] ="kiwi"; //Quando não especificar o indice sempre será armazenado na ultima posição  
   
          echo count($salada); 
          // count conta quantos elementos tem em um array 

     ?>
   
     <pre>
        <?php
             print_r($salada);
        ?>
     </pre>

       
    </body>
</html>