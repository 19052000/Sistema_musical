<?php
 $genero = $_GET['genero'];
 $volta  = $_GET['volta'];
    include('include.php');
    include('../conexao.php');
    $n_perfil = "SELECT id_perfil FROM tb_perfil WHERE perfil = '$perfil'";
    $novo     = $conex->prepare($n_perfil);
    $novo->execute();
    foreach($novo as $bolo){
    $id_perfil = $bolo['id_perfil'];
    }
        if($_POST['pri'] == 1){
            $avaliacao = 2;
            $desaprovacao = 0;
        }
        elseif($_POST['pri'] == 2) {
            $avaliacao = 1;
            $desaprovacao = 0;
        }
        else{
            $desaprovacao = 2;
            $avaliacao = 0;
        }
      $sql = "SELECT gostei, odiei FROM tb_perf_genero WHERE perfil = '$id_perfil' AND genero ='$genero'";
      $e_perfil = $conex ->prepare($sql);
      $e_perfil->execute();
      $existe = $e_perfil->rowCount();
      if($existe==1){
        foreach($e_perfil as $ep){
            $gosteis = $ep['gostei'];
            $odiei = $ep['odiei'];
        }
        $avaliacao = $avaliacao + $gosteis;
        $desaprovacao = $desaprovacao + $odiei;
        $sql2 = "UPDATE tb_perf_genero SET
        gostei = ?,
        odiei  = ?
        WHERE perfil = ? AND genero = ?";
        $envio = $conex->prepare($sql2);
        $envio->execute(array($avaliacao,$desaprovacao,$id_perfil,$genero));
        $conex = NULL;
        header("Location:$volta.php");
      }
      else{
       $inser = "INSERT INTO tb_perf_genero VALUES(?,?,?,?,?)";
       $exe   = $conex->prepare($inser);
       $exe->execute(array($id,$id_perfil,genero,$avaliacao,$desaprovacao));
       $conex = NULL;
       header("Location:$volta.php");
      }