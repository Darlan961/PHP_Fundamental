<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
          <?php 
             
             $dia = "quarta";

          switch ($dia) {
              case 'segunda':
                  echo "hoje é segunda :(";
              break;

              case 'quarta' : 
                 echo "Hoje é quarta !";
              break;
              
              case 'sexta' : 
                echo "Hoje é sexta feira \0/ ";
              break;

              default:
                  echo "Opção inválida ";
                  break;
          }
          
          ?>
     
    </body>
</html>