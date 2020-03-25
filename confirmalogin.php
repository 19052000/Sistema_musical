<?php
$usuario_digitado = $_POST["Email"];
$senha_digitada = ($_POST["Senha"]);

$sql_query1 = "SELECT * FROM tb_user WHERE Email = '$usuario_digitado' AND Senha = '$senha_digitada' ";

include "conexao.php";

$user = $conex->prepare($sql_query1);
$user -> execute();

$exist = $user->rowcount();
foreach($user as $dados){
	$perfil = $dados['Perfil'];
}
if($exist == 1){
	if($perfil == 3){
	$_SESSION['Email'] = $usuario_digitado;
	$script = "<script>alert('Bem vindo Usuario');window.location.href='Usuario/P'</script>";
	echo $script;
	$conex = NULL;
	die();
	}
	else{
		if($perfil == 5){
			$_SESSION['Email'] = $usuario_digitado;
			$script = "<script>alert('Eu sou um admin');window.location.href='#'</script>";
			echo $script;
			$conex = NULL;
			die();
		}
	}
}
else{
		$script = "<script>alert('Login e/ou senha incorreto(s)');window.location.href='index.php?Email=$usuario_digitado'</script>";
		echo $script;
		echo "<br>";
		echo $senha_digitada;
		die();
		$conex = NULL;
	}