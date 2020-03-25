<!DOCTYPE html>
<?php
    $url1 = "https://www.youtube.com/results?search_query=musica+classica";
    $todo_site = file_get_contents($url1);
    $val1 = explode('"commandMetadata":{"webCommandMetadata":{"url":"/watch?',$todo_site);
    $val2 = explode('aria-hidden="true"><a href="/watch?v=',$val1[0]);

    $val3 = explode('&amp;list',$val2[1]);
    $video = 'https://www.youtube.com/embed/'.$val3[0];
    $aleatorio = "<iframe width='560' height='315' src='$video' frameborder='0' allow='accelerometer; autoplay;
         encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
   //segunda opção
       $val32 = explode('&amp;list',$val2[2]);
       $video2 = 'https://www.youtube.com/embed/'.$val32[0];
       $aleatorio2 = "<iframe width='560' height='315' src='$video2' frameborder='0' allow='accelerometer; autoplay;
       encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
?>
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
                <h4>Disco</h4>
                    <nav class="modulos">
                        <div class="modulo">
                            <ul>
                                <li><?=  $aleatorio;?></li>
                                <li>
                                    <form action="Dados_perfil.php?genero=3&volta=classica" method="POST">
                                        Como você classificaria está música?
                                        <input type="radio" id="adorei" name="pri" value="1">
                                        <label for="adorei">Adorei</label>
                                        <input type="radio" id="gostei" name="pri" value="2">
                                        <label for="gostei">Gostei</label><br>
                                        <input type="radio" id="n_gostei" name="pri" value="3">
                                        <label for="n_gostei">Não gostei</label><br>
                                        <input type="submit" name="salv1" value="Salvar">
                                        
                                    </form>
                                </li>
                            </ul>
                        </div>
                       <div class="modulo">
                            <ul>
                                <li><?=  $aleatorio2;?></li>
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
