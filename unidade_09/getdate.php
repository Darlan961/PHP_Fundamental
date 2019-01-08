<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
     <?php
       //Define o fuso horário padrão usado por todas as funções de data 
       //O GMT define o fusoráriode cada país 
          date_default_timezone_set('Etc/GMT+3');
          $agora = getdate();

          print_r($agora);
         
    
     ?>
    </body>
</html>