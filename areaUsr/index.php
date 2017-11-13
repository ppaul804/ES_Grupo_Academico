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
        <section class="content-section-a" style="margin-top: 25px">

            <div class="container">

                <p class="h3 text-center"><strong>Grupos</strong></p>
                <br>

                <form action="#">

                    <div class="form-group">
                        <label for="inputDisciplina">Adicionar disciplina</label>
                        <input type="text" class="form-control" id="inputDisciplina" placeholder="Nome da disciplina">
                    </div>

                    <button type="submit" class="btn btn-default">Adicionar disciplina</button>

                </form>
            </div>
            <!-- /.container -->
        </section>

        <section class="content-section-b">
            <div class="container">
                <label>Selecionar disciplina</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </section>

        <section class="content-section-a">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Notações</strong></p>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <table class="table table-hover table-striped">

                            <tr>
                            <strong>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                            </strong>
                            </tr>

                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>

                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section-b">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Arquivos</strong></p>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <table class="table table-hover table-striped">

                            <tr>
                            <strong>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                            </strong>
                            </tr>

                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>

                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section-a">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Eventos</strong></p>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <table class="table table-hover table-striped">

                            <tr>
                            <strong>
                                <th>test</th>
                                <th>test</th>
                                <th>test</th>
                            </strong>
                            </tr>

                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>

                            <tr>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>

                        </table>
                    </div>
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