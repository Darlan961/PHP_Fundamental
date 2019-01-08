<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
     <?php
        //setlocale — Define informações locais link -> https://secure.php.net/manual/pt_BR/function.setlocale.php
        //strftime — Formata uma hora/data de acordo com as configurações locais link -> https://secure.php.net/manual/pt_BR/function.strftime.php

        //Define o fuso horário padrão usado por todas as funções de data
          date_default_timezone_set('Etc/GMT+3');
          setlocale(LC_TIME, "pt_BR");

         $ano  = strftime('%G');
         $mes = strftime('%m');
         $dia = strftime('%d');

        $horas = strftime('%H');
        $minutos = strftime('%M');
        $segundos = strftime('%S');

        echo $horas ." : " . $minutos . " : " . $segundos  . "<br><br>";
         
        echo $dia . " / " . $mes ." / " . $ano;      
     ?>
    </body>
</html>