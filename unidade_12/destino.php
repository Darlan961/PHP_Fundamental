<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>  

     <?php 
        
    // Trabalhando com o operador ternario mesmo exemplo da unidade com condicional 
    
        isset($_POST["nome"]) ? $nome = $_POST["nome"] : $nome = "Nome não está configurado" ;
        
        isset($_POST["email"]) ? $email = $_POST["email"] : $email = "Email não está configurado ";
        
        echo "nome : " . $nome .  "<br>";
        
        echo "email: " . $email .  "<br>";



      ?>

    </body> 
</html>