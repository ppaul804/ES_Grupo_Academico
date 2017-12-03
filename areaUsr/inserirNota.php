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
				<p class="h3 text-center"><strong>Notas</strong></p>
				
				<?php require "../banco/configuracao.php";
				
				session_start();
			             
                $id = $_GET['idDisciplina']; ?>								
				
        </div>
        </section>

        <section class="content-section-a">
            <div class="container">
                			
                <form action="banco/insereNota.php?idDisciplina=<?php echo $id; ?>" method="POST">	
              		
                    <div class="form-group">
                        <label for="inputNome">Autor</label>
                        <input id="inputNome" name="inputNome" type="text" class="form-control" required placeholder="Insira seu nome">
                    </div>                 
                
            </div>
        </section>
          
        <section class="content-section-b">
            <div class="container">
                    <div class="form-group">
                        <label for="inputNota">Nota</label>
                        <input id="inputNota" name="inputNota" type="text" class="form-control" required placeholder="Insira sua mensagem">
                           <br>					 	
                        <button class="btn btn-primary" type="submit">Inserir</button>					
                    </div>
                </form>
                      <br>
                    <form action="disciplina.php">                         
                      <button class="btn btn-primary" type="submit">Voltar</button>
                    </form>
					
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