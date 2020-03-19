<!DOCTYPE html>

<?php
$id   = $_GET["id"];
$sql = "SELECT * FROM tb_user WHERE id='$id'";
include "../conexao.php";
$clientes = $conex->prepare($sql);
$clientes->execute();
foreach ($clientes as $dados) {
	$Nome  = $dados['Nome'];
}
$conex = NULL;

if (isset($_POST['excluir'])) {
	$sql = "DELETE FROM tb_user WHERE id='$id'";
	include "../conexao.php";
	$clientes = $conex->prepare($sql);
	$clientes->execute();
	$conex = NULL;
	Header("Location: Tabela_user.php");
}
if (isset($_POST['voltar'])) {
	Header("Location: Tabela_user.php");
}
?>

<head>
	<style>
		#fundo {
			background-color: #eaeae1;

		}

		fieldset {
			background-color: white;
			position: relative;
			width: 400px;
			height: 200px;
		}

		#deletar {
			position: relative;
			border: 1px solid black;
			background-color: white;
			color: red;
			height: 30px;
			width: 140px;
		}

		#voltara {
			position: relative;
			border: 1px solid black;
			background-color: white;
			color: red;
			height: 30px;
			width: 140px;
		}

		#logo {
			position: relative;
			top: 5%;
			height: 150px;
			width: 250px;
		}
		
	</style>

</head>


<body id="fundo">
	<a href="Tabela_user.php">
		
	</a>
	<center>
		<fieldset>
			<h3>Você deseja realmente excluir <?php echo $Nome ?> ?</h3>
			<form action="" method="POST">
				<br>
				<br>
				<center><input id="voltara" type="submit" name="voltar" value="voltar"/>
				<input id="deletar" type="submit" name="excluir" value="excluir"onclick="excluir()"/>
				</center>
			</form>
		</fieldset>
	</center>
	</body>
</html>