<!DOCTYPE html>

<?php

	session_start();
	$id     = $_SESSION['id'];
	$Email  = $_SESSION['email'];
	$Nome   = $_SESSION['nome'];
	$Idade  = $_SESSION['idade'];
	$_Sexo   = $_SESSION['sexo'];
	$senha1  = $_SESSION['senha'];
	if(isset($_POST['enviar'])){
		if(isset($_POST['pri']) AND isset($_POST['sec']) AND isset($_POST['ter'])){
			$perfil = $_POST['pri'].$_POST['sec'].$_POST['ter'];
			include "conexao.php";
			$sql      = 'INSERT INTO tb_user(id, Nome, Idade, Email, Sexo, Senha,Perfil) VALUES(?,?,?,?,?,?,?)';
			$clientes = $conex->prepare($sql);
			$clientes->execute(array($id, $Nome, $Idade,  $Email, $_Sexo, $senha1,$perfil));
			$conex = NULL; //encerra conexao com o banco
			header('location:index.php');
		}
		else{
			echo "<script>alert('Um campo não preenchido.');</script>";
		}
	}

?>
<html lang="pt-br">
	<head>
		<title>You Music Perguntas</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="#" method="POST" >
			<div>
				Qual é o gênero de sua preferência?
			</div>
			<br>
			<div>
				<input type="radio" id="punk" name="pri" value="1">
				<label for="punk">PUNK</label><br>
				<input type="radio" id="classica" name="pri" value="2">
				<label for="classica">CLÁSSICA</label><br>
				<input type="radio" id="pop" name="pri" value="3">
				<label for="pop">POP</label>
			</div>
			<br>
			<div>
				Escolha outro gênero que você goste.
			</div>
			<br>
			<div>
				<input type="radio" id="rap" name="sec" value="1">
				<label for="rap">RAP</label><br>
				<input type="radio" id="blues" name="sec" value="2">
				<label for="blues">BLUES</label><br>
				<input type="radio" id="disco" name="sec" value="3">
				<label for="disco">DISCO</label>
			</div>
			<br>
			<div>
				Qual destes instrumentos você gostaria de tocar?
			</div>
			<br>
			<div>
				<input type="radio" id="guitarra" name="ter" value="1">
				<label for="guitarra">GUITARRA</label><br>
				<input type="radio" id="clarinete" name="ter" value="2">
				<label for="clarinete">CLARINETE</label><br>
				<input type="radio" id="violao" name="ter" value="3">
				<label for="violao">VIOLÃO</label>
			</div>
			<br>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>