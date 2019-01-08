
   <?php 
      if (isset($_POST["formulario"])){
            isset($_POST["nome"]) ? $nome = $_POST["nome"] : $nome = "Nome não está configurado" ; 
            isset($_POST["email"]) ? $email = $_POST["email"] : $email = "Email não está configurado ";
            echo "nome : " . $nome .  "<br>";
            echo "email: " . $email .  "<br>";
      }
     
   ?>
  
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>

    <?php  if (!isset( $_POST["formulario"] )) {  ?> <!-- se POST não estiver configurado --->
       <!--enviando os dados para propria pagina -->
        <form action="formulario.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="formulario" value="Enviar Cadastro">
                 <!--name="formulario"  POST vai pegar os dados desse campo e assima irá testa 
                 se o campo está configurado -->   
             
        </form>
    <?php }  ?>
         
    </body>  
</html>