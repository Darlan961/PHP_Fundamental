<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 

     <?php
        
    if ( isset($_POST["nome"])){
        $nome = $_POST["nome"];
    } 
    else{
        $nome = "Nome não existe ! ";
    }

    if ( isset($_POST["email"]) ) {
        $email = $_POST["email"];
    } else {
        $email = "Email não existe ! ";
    }

  echo "nome : " . $nome . "<br>";
  echo "email : " . $email . "<br>";

      ?>

    </body>
</html>