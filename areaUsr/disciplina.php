<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Grupo Acadêmico</title>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- fontes costumizadas para este template -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/landing-page.css" rel="stylesheet">
    </head>

    <body>
        <!-- Navegação -->
        <?php
        include 'navbar.php';
        ?>

        <!-- Page Content -->
        <section class="content-section-b" style="margin-top: 25px">
            <div class="container">
                <p class="h3 text-center"><strong>Disciplinas</strong></p>
				
                <form action="../cadastrarDisciplina.php">
                    <div class="form-group">
                        <label for="inputDisciplina">Criar Nova Disciplina</label>
                        <input id="inputDisciplina" name="inputDisciplina" type="text" class="form-control" required placeholder="Nome do Disciplina">
                    </div>

                    <button type="submit" class="btn btn-primary">Criar</button>
                </form>
            </div>
        </section>

        <section class="content-section-a">
            <div class="container">
                <label>Selecionar Disciplina</label>
                <select class="form-control">
                </select>
                <br>
                <button type="submit" class="btn btn-primary">Selecionar</button>
            </div>
        </section>

        <section class="content-section-b">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Notações</strong></p>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <table class="table table-hover table-striped">
                            <tr>
                            <strong>
                                <th></th>
                                <th></th>
                                <th></th>
                            </strong>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
            </div>
            <!--Botões-->
            <div class="container" >
                <div>
                    <button id="inserir" name="inserir" class="btn btn-primary">Inserir</button> 
                    <button id="editar" name="editar" class="btn btn-primary">Editar</button> 
                    <button id="excluir" name="excluir" class="btn btn-primary">Excluir</button> 
                </div>
            </div>
        </section>

        <section class="content-section-a">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Arquivos</strong></p>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <table class="table table-hover table-striped">

                            <tr>
                            <strong>
                                <th></th>
                                <th></th>
                                <th></th>
                            </strong>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <!--Botões-->
            <div class="container">
                <div class="col-md-4 text-center"> 
                    <button id="inserir" name="inserir" class="btn btn-primary">Inserir</button> 
                    <button id="excluir" name="excluir" class="btn btn-primary">Excluir</button> 
                </div>
            </div>
        </section>

        <section class="content-section-b">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Eventos</strong></p>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <table class="table table-hover table-striped">

                            <tr>
                            <strong>
                                <th></th>
                                <th></th>
                                <th></th>
                            </strong>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <!--Botões-->
            <div class="container">
                <div> 
                    <button id="inserir" name="inserir" class="btn btn-primary">Inserir</button> 
                    <button id="editar" name="editar" class="btn btn-primary">Editar</button> 
                    <button id="excluir" name="excluir" class="btn btn-primary">Excluir</button> 
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>