<?php
 session_start();
        $nome = $_SESSION['nome'];
        $perfil =$_SESSION['perfil'];
?>
<head>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="recursos/css/estilos.css">
        <link rel="stylesheet" href="recursos/css/exercicio.css">
</head>
<header class="cabecalho">
            <img src="../img/LogoMusic.PNG">
        </header>
        <nav class="navegacao">
            <a href="principal.php" class="verde">Home</a>
            <a href="rock.php" class="vermelho">Rock</a>
            <a href="disco.php" class="vermelho">Disco</a>
            <a href="classica.php" class="vermelho">Clássica</a>
            <a href="pop.php" class="vermelho">POP</a>
            <a href="#" class="vermelho">RAP</a>
        </nav>