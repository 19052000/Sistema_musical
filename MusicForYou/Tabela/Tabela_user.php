
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />     
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">	
		<link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
      



    </head>
   
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>

                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Idade</th>
                                                <th>Sexo</th>
                                                <th>Editar</th>
                                                <th>Excluir</th>
                                              
                                              
                                            </tr>
                                        </thead>
                                        <?php include "../conexao.php";
                                            $sql      = "SELECT * FROM tb_user ORDER BY Nome";
                                            $tb_user = $conex->prepare($sql);
                                            $tb_user->execute();
                                            $qtde_clientes = $tb_user->rowCount();
                                            $conex = NULL; //encerra conexao com o banco
                                            //var_dump($clientes);

                                            foreach ($tb_user as $bolacha) {
                                                $id          = $bolacha['id_user'];
                                                $Nome        = $bolacha['Nome'];
                                                $Idade       = $bolacha['Idade'];
                                                $Email       = $bolacha['Email'];
                                                $Sexo        = $bolacha['Sexo'];
                                               

                                                $editar = "<a href='editar.php?id=$id'title='Editar $Nome?'>
                                                <i class='fa fa-edit' aria-hidden='true'></i> 
                                            </a>";

                                                $excluir = "<a href='excluir.php?id=$id'title='Excluir $Nome?'>
                                                <i class='fa fa-trash' aria-hidden='true'></i>
                                            </a>";

                                           echo "<tr><td>$Nome</td><p><td>$Email</td><p><td>$Idade</td><p><td>$Sexo</td><p><td>$editar</td><p><td>$excluir</td></tr>";
                                            }
                                            ?>



</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
           
            </div>
        </div>  
    </body>
</html>