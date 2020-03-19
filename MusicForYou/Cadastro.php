<!doctype html>
<html lang="UTF-08">

<?php

	if (isset($_POST['salvar'])) {

		$id             = "";
        $Email       	= $_POST["Email"];
        $Nome           = $_POST["Nome"];
		$Idade       	= $_POST["Idade"];
        $_Sexo          = $_POST["Sexo"];
		$senha1         = md5($_POST['Senha']);
		$senha2         = md5($_POST['Senha2']);
        
		if($senha1 == $senha2){
            session_start();
            $_SESSION['id']  = $id;
            $_SESSION['email']  = $Email;
            $_SESSION['nome']  = $Nome ;
            $_SESSION['idade']  = $Idade;
            $_SESSION['sexo']  = $_Sexo;
            $_SESSION['senha']  = $senha1;
            $_SESSION['tipo']  = 5;
            header('Location:questionario.php');
		}
		else{
			echo "<script>alert('Algo de errado')</script>";
		}
    }
    
	include("conexao.php");
	@$sql = "SELECT * FROM `tb_sexo` ORDER BY `descricao`";
	@$clientes = $conex->prepare($sql);
	@$clientes->Execute();
	@$qtde_clientes = $clientes->rowCount();
	@$conex = NULL;

?>


<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>MusicForYou Cadastro</title>

    <style>
        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
        }

        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
        #tamanho{

            width: 60px; 
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">MusicForYou</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Index.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Cadastro</div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Digite seu E-mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="Email" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Digite seu Nome</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="Nome" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">

                                <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="Senha" required>
                                    </div>


                                    </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Confirme sua Senha</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="Senha2" required>
                                    </div>



                                </div>

                                <div class="form-group row">
                                   
                                    
                                    <label for="Sex" class="col-md-4 col-form-label text-md-right">Sexo</label>
                                    <select name='Sexo'>
                                            <?php
                                            foreach ($clientes as $dados) {
                                                $nome = $dados['descricao'];
                                                $id   = $dados['id_sexo'];
                                                echo "<option value=$id >".$nome."</option>";
                                            }
                                            ?>
                                    </select>
                                </div>

                                
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Digite sua Idade</label>
                                        <div class="col-md-6">

                                        <input type="text" id="tamanho" class="form-control" name="Idade" required>

                                        </div>



                                </div>


                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Deseja receber nossas novidades via E-mail
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" class="btn btn-primary" name="salvar" value="Cadastrar-se">
                                        

                                    <a href="#" class="btn btn-link">
                                      
                                    </a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
</body>

</html>