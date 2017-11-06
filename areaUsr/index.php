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
        <section class="content-section-a">

            <div class="container">
                <h3>Grupos</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Submenu 1-1</a></li>
                            <li><a href="#">Submenu 1-2</a></li>
                            <li><a href="#">Submenu 1-3</a></li>                        
                        </ul>
                    </li>
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="#">Menu 3</a></li>
                </ul>
            </div>
            <!-- /.container -->
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