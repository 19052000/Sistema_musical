<!DOCTYPE html>
<html>
    <head>
        <title>Exercício</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="recursos/css/estilos.css">
        <link rel="stylesheet" href="recursos/css/exercicio.css">
    </head>
    <body class="exercicio">
       <?php include('include.php');?>
        <main class="principal">
            <div class="conteudo">
                <?php
                  //  include (__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>
        </main>
        <footer class="rodape">
            Curdo de PHP <?php echo date('Y');?>
        </footer>
    </body>
</html>