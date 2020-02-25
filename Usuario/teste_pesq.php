<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Teste URL</title>
    </head>
    <body>
        <form action="#" method="POST">
            <h3>Pesquisar por estilos de música: 
            <input type="text" name="url" id="txt">
            <input type="submit" name="enviar" value="Enviar">
            </h3>
        </form>

        <?php
            $url1 = "https://www.youtube.com/results?search_query=aqui";
            if(isset($_POST['enviar'])){
                $nova_url = $_POST['url'];
                $novastring = str_replace("aqui",$nova_url,$url1);
                $todo_site = file_get_contents($novastring);
                $val1 = explode('"commandMetadata":{"webCommandMetadata":{"url":"/watch?',$todo_site);
                $val2 = explode('aria-hidden="true"><a href="/watch?v=',$val1[0]);
                $val3 = explode('&amp;list',$val2[2]);
                $video = 'https://www.youtube.com/embed/'.$val3[0];
                //$video = 'https://www.youtube.com/embed/'.$val3[0];
                echo "<iframe width='560' height='315' src='$video' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
            }
        ?>
    </body>
</html>

