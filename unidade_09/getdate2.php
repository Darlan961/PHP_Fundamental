<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
     <?php
     
          date_default_timezone_set('Etc/GMT+3');
          $agora = getdate();
          //Recupera informações de data/hora, Retorna um array associativo  
          //Como getdate é um array associativo cada indice se transforma em uma elemento que contem dados o nome dos elementos estão no site : https://secure.php.net/manual/pt_BR/function.getdate.php

         $ano  = $agora["year"];
         $mes = $agora["mon"];
         $dia = $agora["mday"];

        $horas = $agora["hours"];
        $minutos = $agora["minutes"];
        $segundos = $agora["seconds"];

        echo $horas ." : " . $minutos . " : " . $segundos  . "<br><br>";
         
        echo $dia . " / " . $mes ." / " . $ano;      
     ?>
    </body>
</html>