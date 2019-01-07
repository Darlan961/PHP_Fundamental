 
    <?php 
       $salario = 930;
       $gasolina = null;
       $nome = "";
       $fumante = true;
  
    ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      
    <?php  // isset informa se uma variável foi inicialisada  
 
 echo "A variavel está configurada ? " . isset($salario) ."<br>";
 echo "A variavel está configurada ? " . isset($gasolina) ."<br>";
 echo "A variavel está configurada ? " . isset($nome) ."<br>";
 echo "A variavel está configurada ? " . isset($fumante) ."<br>";
    
       
    ?>

    </body>
</html>