
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      
    <?php   
   // empty testa se uma variável está vasia ou não
  // As duas variáveis estão vasias por isso que vai retorna 1

     $nome = null;
     $endereco = "";
      
     echo "a variável é null ? : " . empty($nome). "<br>"; 
     echo "A variável é null ? : " . empty($endereco)."<br>";       
    ?>

    </body>
</html>