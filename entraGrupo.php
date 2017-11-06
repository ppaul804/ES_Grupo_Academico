<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grupo Acadêmico</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- fontes costumizadas para este template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <!-- Navegação -->
    <?php
    include 'navbar.php';
    ?>

    <!-- Page Content -->
    <section class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto mr-auto">
                    <hr class="heading-spacer">
                    <div class="clearfix"></div>
                    <form action="autenticar.php" method="post" class="form-signin">
                        <h2 class="form-signin-heading">Entrar no Grupo</h2>
                        <label for="nome_grupo" class="sr-only">
                            Nome do Grupo
                        </label>
                        <input id="nome_grupo" class="form-control" placeholder="Nome do Grupo" required="" autofocus="" type="email">
                        <label for="senha" class="sr-only">
                            Senha
                        </label>
                        <input id="senha" class="form-control" placeholder="Senha" required="" type="password">
                        <br>
                        <!--<div class="g-recaptcha" data-sitekey="your_site_key"></div>
                        <br>-->
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Entrar
                        </button>
                    </form>
                </div>
            </div>

        </div> <!-- /container -->
    </section>

    <!-- Rodapé -->
    <?php
    include 'footer.php';
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body></html>