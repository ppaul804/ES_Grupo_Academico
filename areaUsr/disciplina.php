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

                <p class="h3 text-center"><strong>Disciplinas</strong></p>
                <br>

                <form action="../cadastrarDisciplina.php">
                    <div class="form-group">
                        <label for="inputDisciplina">Adicionar Disciplina</label>
                        <input id="inputDisciplina" name="inputDisciplina" type="text" class="form-control" placeholder="Nome do Disciplina">
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
                </select>
                <button type="submit" class="btn btn-default">Selecionar disciplina</button>
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