<?php
		$senha   = md5($_POST['senha1']);
		$email   = $_POST['email'];
		include ("conexao.php");
		$sql     =  "SELECT * FROM tb_user WHERE Senha = '$senha' AND Email = '$email'";
		$usuario = $conex->prepare($sql);
		$usuario -> execute();	
		$exist = $usuario->rowCount();
		//var_dump($exist);
		if($exist == 1 ){
			session_start();
			foreach($usuario as $user){
				$_SESSION['nome']    = $user['Nome'];
				$_SESSION['perfil']  = $user['Perfil'];
				$tipo   = $user['Tipo_user'];
			}
			if($tipo == 5)
				header("Location:Usuario/principal.php");
			else
				header("Location:Tabela/Tabela_user.php");
		}	
		else{
			echo "Sai piá pançudo";
			
		}		
		/*foreach($usuario as $user){
			senha_user  = $user['Senha'];
		}*/

?>