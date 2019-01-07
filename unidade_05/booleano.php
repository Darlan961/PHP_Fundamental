
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      
    <?php 
        $fumante = true;
        
        echo "É fumante ? " .  $fumante ."<br>";

        echo "É uma variável booleana ? ". is_bool($fumante) ."<br><br>";
           
        if($fumante === true){
            echo "DEIXE DE FUMAR MIZERÁVEL !!! <br>";
        } 
        else{
            echo "Parabéns você não é fumante ! <br>";    
        }
        

    ?>

    </body>
</html>