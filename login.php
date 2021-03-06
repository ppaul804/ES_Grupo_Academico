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
    <link rel="shortcut icon" href="img/favicon.png">

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
    <section class="content-section-b">
        <div class="container">                          
            <div class="row">
                <div class="col-lg-5 ml-auto mr-auto">
                    <hr class="heading-spacer">
                    <div class="clearfix"></div>
                    <form action="banco/autenticar.php" method="POST" class="form-signin">
                        <h2 class="form-signin-heading">Efetuar Login</h2>
                        <label for="usuario" class="sr-only"> Usuário </label>
                        <input id="usuario" name="usuario" class="form-control" placeholder="Usuário" required autofocus="" type="text">
                        <label for="senha" class="sr-only"> Senha </label>
                        <input id="senha" name="senha" class="form-control" placeholder="Senha" required type="password">
                        <div class="checkbox">
                            <label>
                                <input value="lembrar-me" type="checkbox"> Lembrar-me
                            </label>
                        </div>
                        <!--<div class="g-recaptcha" data-sitekey="your_site_key"></div>
                        <br>-->
                        <button class="btn btn-lg btn-primary btn-block" type="submit"> Login </button>
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