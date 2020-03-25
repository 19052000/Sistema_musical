<?php
		$senha   = md5($_POST['senha1']);
		$email   = $_POST['email'];
		include ("Sistema_Musical/conexao.php");
		$sql     =  "SELECT Senha,Email FROM tb_user WHERE Senha = '$senha' AND Email = '$email'";
		$usuario = $conex->prepare($sql);
		$usuario -> execute();	
		$exist = $usuario->rowCount();
		//var_dump($exist);
		if($exist == 1 ){

			echo "parabéns";
		}	
		else{
			echo "Sai piá pançudo";
			
		}		
		/*foreach($usuario as $user){
			senha_user  = $user['Senha'];
		}*/

?>