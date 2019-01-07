
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    
    <?php 
    $salada = array("banana","maçã" , "pera" , "uva");

    foreach ($salada as $var) {
        echo $var 
    }
 
   // in_array ver se o elemento exite no array retorna 1 ou nada 

    echo "O elemento existe ? : " . in_array("pera", $salada) . "<br>";
    echo "O elemento existe ? : " . in_array("abacaxi", $salada) . "<br>";


    echo "Posição do elemento pesquisado : " . array_search("pera",$salada);


   
       
    
   ?>      
    
    </body>
</html>