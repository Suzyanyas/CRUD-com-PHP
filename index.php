 <?php
 require 'connection.php';
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card"> 
                    <div class="card-header">   
                        <h4>Lista de Usuário
                            <a href="usuario-create.php" class="btn btn-danger float-end">ADICIONAR USUÁRIO</a>
                        </h4>    
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOME</th>
                                    <th>E-MAIL</th>
                                    <th>DATA NASCIMENTO</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Teste</td>
                                    <td>teste@teste.com</td>
                                    <td>01/01/2000</td>
                                    <td>
                                        <a href="" class="btn btn-secondary btn-sm">VISUALIZAR</a>
                                        <a href="" class="btn btn-success btn-sm">EDITAR</a>
                                        <form action="" method="POST" class="d-inline">
                                            <button type="submit" class="delete_usuario" value="1" class="btn btn-danger btn-sm" style="background-color: red; color:white;">
                                               EXCLUIR 
                                            </button>
                                        </form>
                                    </td>
                                </tr>    
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>

