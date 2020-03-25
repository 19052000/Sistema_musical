<?php  
    //paga o perfil do usuario
     $n_perfil = "SELECT id_perfil FROM tb_perfil WHERE perfil = '$perfil'";
     $novo     = $conex->prepare($n_perfil);
     $novo->execute();
     foreach($novo as $bolo){
        $id_perfil = $bolo['id_perfil'];
     }
     //////////////////
//Pega o genero que a pessoa mais gostou 
     $sql = "SELECT tb_perf_genero.genero, tb_perf_genero.gostei, tb_perf_genero.odiei, tb_genero.descricao
      FROM tb_perf_genero INNER JOIN tb_genero ON tb_perf_genero.genero = tb_genero.id_genero
      WHERE perfil=$id_perfil ORDER BY genero";
      $p_genero = $conex->prepare($sql);
      $p_genero->execute();  
      $maior = 0;  
      foreach($p_genero as $gen){
        if($maior < $gen['gostei']){ 
               $maior = $gen['gostei'];
               $nome_genero = $gen['descricao'];
               $id_genero   = $gen['genero'];
            }
         } 
        if($id_genero != 3){
            $num = rand(1,7);
        }
        elseif($id_genero != 2){
            $num = rand(1,7);
        }
        else{
            $num = rand(1,3);
        }
      ///  recomendação
       echo $url2 = "https://www.youtube.com/results?search_query=melhores+musicas+de+".$nome_genero;
		$todo_site = file_get_contents($url2);
        $val1 = explode('"commandMetadata":{"webCommandMetadata":{"url":"/watch?',$todo_site);
        $val2 = explode('aria-hidden="true"><a href="/watch?v=',$val1[0]);
        $val3 = explode('&amp;list',$val2[1]);
        $video = 'https://www.youtube.com/embed/'.$val3[0];
        $aleatorio2 = "<iframe width='560' height='315' src='$video' frameborder='0' allow='accelerometer; autoplay;
        encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";   


/////Pega vídeo aleatório
    $url1 = "https://www.youtube.com/results?search_query=melhores+musicas+de+todos+os+tempos";
		$todo_site = file_get_contents($url1);
        $val1 = explode('"commandMetadata":{"webCommandMetadata":{"url":"/watch?',$todo_site);
        $val2 = explode('aria-hidden="true"><a href="/watch?v=',$val1[0]);
        $num = rand(1,7);
        $val3 = explode('&amp;list',$val2[$num]);
        $video = 'https://www.youtube.com/embed/'.$val3[0];
        $aleatorio = "<iframe width='560' height='315' src='$video' frameborder='0' allow='accelerometer; autoplay;
              encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";