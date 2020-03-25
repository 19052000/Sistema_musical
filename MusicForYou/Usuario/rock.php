<!DOCTYPE html>
<?php
     include('include.php');
     $url1 = "https://www.youtube.com/results?search_query=rock";
     $todo_site = file_get_contents($url1);
     $val1 = explode('"commandMetadata":{"webCommandMetadata":{"url":"/watch?',$todo_site);
     $val2 = explode('aria-hidden="true"><a href="/watch?v=',$val1[0]);

     $num = rand(1,4);
     $val3 = explode('&amp;list',$val2[$num]);
     $video = 'https://www.youtube.com/embed/'.$val3[0];
     $aleatorio = "<iframe width='560' height='315' src='$video' frameborder='0' allow='accelerometer; autoplay;
          encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    //segunda opção
    do{
        $num2 = rand(1,4);
        $val3 = explode('&amp;list',$val2[$num2]);
        $video = 'https://www.youtube.com/embed/'.$val3[0];
        $aleatorio2 = "<iframe width='560' height='315' src='$video' frameborder='0' allow='accelerometer; autoplay;
        encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    } while($num2 == $num);

     //terceira opção
    do{
        $num3 = rand(1,4);
        $val3 = explode('&amp;list',$val2[$num3]);
        $video = 'https://www.youtube.com/embed/'.$val3[0];
        $aleatorio3 = "<iframe width='560' height='315' src='$video' frameborder='0' allow='accelerometer; autoplay;
        encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    }while($num3 == $num OR $num3 == $num2);
?>
<html>
    <head>
        <title>Exercício</title>
        <meta charset="UTF-8">
    </head>
    <body class="exercicio">
        <main class="principal">
                <div class="conteudo">
                <h4>Rock</h4>
                    <nav class="modulos">
                        <div class="modulo">
                            <ul>
                                <li><?=  $aleatorio;?></li>
                                <li>
                                    <form action="Dados_perfil.php?genero=1&volta=rock" method="POST">
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
                                <li><?= $aleatorio2;?></li>
                                <li>
                                    <form action="Dados_perfil.php?genero=1&volta=rock" method="POST">
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
                            <li><?= $aleatorio3;?></li>
                            <li>
                                    <form action="Dados_perfil.php?genero=1&volta=rock" method="POST">
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
                    </nav>
                </div>
        </main>
        <footer class="rodape">
            Music For you <?php echo date('Y');?>
        </footer>
    </body>
</html>
