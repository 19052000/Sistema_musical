<!DOCTYPE html>
<?php
$id = $_GET['id'];
include "../conexao.php";
$sql      = "SELECT * FROM tb_user WHERE id_user = '$id'";
$clientes = $conex->prepare($sql);
$clientes->execute();
foreach ($clientes as $bolacha) {
	$id            = $bolacha['id_user'];
	$Nome          = $bolacha['Nome'];
    $Idade         = $bolacha['Idade'];
    $Email         = $bolacha['Email'];
	$Sexo          =  $bolacha['Sexo'];
}
$conex = NULL; //encerra conexao com o banco

if (isset($_POST['Editar'])) {

	$id            = $_POST['id'];
	$Nome          = $_POST['Nome'];
    $Idade         = $_POST['Idade'];
    $Email         = $_POST['Email'];
	$Sexo          = $_POST['Sexo'];
	

	include "../conexao.php";
	$sql      = "update tb_user SET
					Nome         = ?,
                    Idade        = ?,
                    Email        = ?,
					Sexo         = ?
					WHERE
					id = ?";
	$clientes = $conex->prepare($sql);
	$clientes->execute(array($Nome, $Idade, $Email, $Sexo, $id));
	$conex = NULL; //encerra conexao com o banco
	header("Location: Tabela_user.php");
}
?>
<html lang="pt-br">

<head>
		
		<title>Perfil de usuário</title>

	<style>
		fieldset {
			position: relative;
			background-color: white;
			width: 500px;
			height: 505px;
			border-radius: 2%;
		}

		#logo {
			position: relative;
			top: 5%;
			height: 150px;
			width: 250px;
		}

		#font {
			position: relative;
			border: 1px solid black;
			background-color: red;
			color: white;
			height: 29px;
			width: 200px;
			font-size: 100%;

		}
	</style>


</head>

<body>

	<hr>
	<div class="col-sm-6 col-md-6">
		<h1>Editar Perfil de usuário</h1>
	</div>

	<center>
		<fieldset>
			<form align='center' action='' method='POST' autocomplete='off'>
				<input type='hidden' name='id' value="<?php echo $id; ?>">

				Nome:<?php echo $Nome; ?><br>
				<input type='text' name='Nome' value='<?php echo $Nome; ?>'><br><br>

				Email:<?php echo $Email; ?><br>
				<input type='text' name='Email' value='<?php echo $Email; ?>'><br><br>

				Idade:<?php echo $Idade; ?><br>
				<input type='text' name='Idade' value='<?php echo $Idade; ?>'><br><br>

				Sexo: <?php echo $Sexo; ?><br>
				<input type='text' name='Sexo' value='<?php echo $Sexo; ?>'><br>

				<br>

				<br>
				<input type='submit' id="salvar" name='Editar' value='SALVAR' onclick="SALVAR()">
			</form>
		</fieldset>
	</center>
</body>

</html>
<script>
	function SALVAR() {

		alert("dados salvos com sucesso!");

	}
</script>