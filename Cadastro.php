<!DOCTYPE html>


<html lang="pt-br">

<head>
	<title>Músic For YOU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap Core CSS -->
	<link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- DataTables CSS -->
	<link href="bootstrap/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="bootstrap/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
		body {
			background-image: url('img/Musicfundo.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}

		article {
			opacity: 80%;
			padding: 12%;
			margin: 10%;
			background-color: #566573;
			border-radius: 10px;
			position: relative;
			height: 400%;
			top: 60px;
		}

		.logo {
			background-image: url('img/Musicfundo.jpg');
		}

		.logotipo {
			position: relative;
			top: 30%;

		}

		.form-control {
			margin-top: 15%;
			border-radius: 10px;
			background-color: #eee;
		}

		.form-control:hover {
			border: 2px solid #CB4335;
		}

		.form-control:active {}
	</style>
</head>

<body>

	<center><img id="logotipo" src="img/LogoMusic.PNG"></center><br>
	<div class="conteiner">
		<div class="row">
			<div class="col-xs-6 col-sm-4"></div>
			<div class="col-xs-6 col-sm-4">
				<article>
					<div class="logo"></div>
					<form action="confirmalogin.php" method='POST'>
						<div class="form-group">
							<input name="Email" type="Email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group">

							<input name="Senha" type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group">

							<button id="" type="submit" class="btn btn-primary" width="100px" left="40px">Logar-se </button>
						</div>
					</form>
				</article>
			</div>
			<div class="col-xs-6 col-sm-4"></div>
		</div>
	</div>
</body>

</html>