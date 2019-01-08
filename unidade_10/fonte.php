<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <!---Links com parâmetros  --->

          <h2>Links com parametros para pagina destino </h2>

        <ul>
            <!--- criando um parâmetro/variável em um link -->
            <!--- se quezer colocar uma segunda variável é só colocar um & exemplo : codigo=0&nome=laranja-->
            <li> <a href ="destino.php?codigo=0" > Laranja </a></li>
            <li> <a href = "destino.php?codigo=1" > Maçã </a></li>
            <li> <a href = "destino.php?codigo=2"> Abacate </a></li>
        </ul> 


       <h2>Links com paginas</h2>
        <ul>
            <li> <a href ="laranja.html" > Laranja </a></li>
            <li> <a href = "maca.html" > Maçã </a></li>
            <li> <a href = "abacate.html"> Abacate </a></li>
        </ul> 
    </body>
</html>