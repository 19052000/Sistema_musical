<!DOCTYPE html>
<html>
    <head>
        <title>Exercício</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="recursos/css/estilos.css">
        <link rel="stylesheet" href="recursos/css/exercicio.css">
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso de PHP</h1>
            <h2>Visualização de Exercício</h2>
        </header>
        <nav class="navegacao">
            <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php
                    include (__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>
        </main>
        <footer class="rodape">
            Curdo de PHP <?php echo date('Y');?>
        </footer>
    </body>
</html>