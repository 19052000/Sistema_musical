<?php
		$senha   = md5($_POST['senha1']);
		$email   = $_POST['email'];
		include ("conexao.php");
		$sql     =  "SELECT Nome,Senha,Email,Perfil FROM tb_user WHERE Senha = '$senha' AND Email = '$email'";
		$usuario = $conex->prepare($sql);
		$usuario -> execute();	
		$exist = $usuario->rowCount();
		//var_dump($exist);
		if($exist == 1 ){
			session_start();
			foreach($usuario as $user){
				$_SESSION['nome']    = $user['Nome'];
				$_SESSION['perfil']  = $user['Perfil'];
			}
			header("Location:Usuario/principal.php");
		}	
		else{
			echo "Sai piá pançudo";
			
		}		
		/*foreach($usuario as $user){
			senha_user  = $user['Senha'];
		}*/

?>