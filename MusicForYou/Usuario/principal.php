<!DOCTYPE html>
<?php
        

                $url1 = "https://www.youtube.com/results?search_query=melhores+musicas+de+todos+os+tempos";
				$todo_site = file_get_contents($url1);
                $val1 = explode('"commandMetadata":{"webCommandMetadata":{"url":"/watch?',$todo_site);
                $val2 = explode('aria-hidden="true"><a href="/watch?v=',$val1[0]);
                $num = rand(1,7);
                $val3 = explode('&amp;list',$val2[$num]);
                $video = 'https://www.youtube.com/embed/'.$val3[0];
                $aleatorio = "<iframe width='560' height='315' src='$video' frameborder='0' allow='accelerometer; autoplay;
                     encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                
        ?>
<html>
    <head>
        <title>Exercício</title>
        <meta charset="UTF-8">
    </head>
    <body class="exercicio">
        <?php include('include.php');?>
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
                                <li><?= "<iframe width='560' height='315' src='https://www.youtube.com/embed/T38v3-SSGcM' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";?></li>
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
