<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <?php 
       $a = 50 ;
       $b = 40 ; 
       $fumante = true ; 


       if ($a > $b){
           echo "A é maior que B ! <br><br>";
       }

     // Não precisa fazer if($fumante == true) porque $fumante é uma variável bool retorna verdadeiro ou falso  
       if($fumante){ 
           echo "Pare de fumar";
       }
    
    
    ?>
    </body>
</html>