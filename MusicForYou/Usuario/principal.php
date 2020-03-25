<!DOCTYPE html>
<?php
    include('../conexao.php');
    include('include.php');
    include('puxa_musica.php');
?>
<html>
    <head>
        <title>Exercício</title>
        <meta charset="UTF-8">
    </head>
    <body class="exercicio">
        <main class="principal">
                <div class="conteudo">
                <h4>Recomendados para <?= $nome?></h4>
                    <nav class="modulos">
                        <div class="modulo">
                            <ul>
                                <li><?= "<iframe width='560' height='315' src='https://www.youtube.com/embed/T38v3-SSGcM' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";?></li>
                            </ul>
                        </div>
                        <div class="modulo">
                            <ul>
                                <li><?= $aleatorio2;?></li>
                            </ul>
                        </div>
                        <div class="modulo">
                            <ul>
                                <li><?= $aleatorio;?></li>
                            </ul>
                        </div>
                    </nav>
                </div>
        </main>
        <footer class="rodape">
            Music For you <?php echo date('Y');?>
        </footer>
    </body>
</html>
