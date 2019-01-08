<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <!--Resgatando informações enviadas por parâmetros -->
        <!-- Superglobal $_GET pega informações via url --->

        <?php 
          $salada = array("imagens/laranja.jpg","imagens/maca.jpg","imagens/abacate.jpg");
          
          $fruta = $_GET['codigo']; 
          /* ao clicar no link da pagina fonte GET vai pegar o valor pela variavel codigo */

       
        ?>

       <img src = " <?php echo $salada[$fruta] ; ?>" >
        
        <!--- O php está dentro de uma tag img porque no array o caminho leva a uma imgem e o 
        php so devolve uma ao navegador html --->



 
    </body>
</html>