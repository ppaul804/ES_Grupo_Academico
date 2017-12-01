<!DOCTYPE html>
<html lang="pt-br">
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
        <link rel="shortcut icon" href="../img/favicon.png">

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
				<p class="h3 text-center"><strong>Grupos</strong></p>
				
				<?php require "../banco/configuracao.php";
				
				session_start();
				
				$idt_usuario = $_SESSION["idt_usuario"];
				$query = mysqli_query($conexao, "SELECT * FROM tb_grupo WHERE idt_grupo IN (SELECT fk_idt_grupo FROM ta_usuario_grupo WHERE fk_idt_usuario = $idt_usuario)"); ?>
				
                <form action="banco/disciplinaAbrir.php" method="POST"> 
					<label>Selecionar Grupo:</label> 
					<select id="grupos" name="grupos"> 
						<?php while($prod = mysqli_fetch_array($query)) { ?> 
							<option value="<?php echo $prod['idt_grupo'] ?>"><?php echo $prod['nme_grupo'] ?></option> <?php 
						} ?> 
					</select> 
					<br>
					<button class="btn btn-primary" type="submit">Abrir</button>									
				</form>
            </div>
        </section>

        <section class="content-section-a">
            <div class="container">
                <form action="banco/grupoCadastrar.php" method="POST">
                    <div class="form-group">
                        <label for="inputGrupo">Criar Novo Grupo</label>
                        <input id="inputGrupo" name="inputGrupo" type="text" class="form-control" required placeholder="Nome do Grupo">
                    </div>
                    <button type="submit" class="btn btn-primary">Criar</button>
                </form>
            </div>
        </section>

        <section class="content-section-b">
            <div class="container">
                <form action="banco/grupoPesquisar.php" method="POST">
                    <div class="form-group">
                        <label for="inputPesquisa">Pesquisar Grupo</label>
                        <input id="inputPesquisa" name="inputPesquisa" type="text" class="form-control" required placeholder="Pesquisar">
                        <br>
                        <button class="btn btn-primary" type="submit">Entrar</button>
                    </div>
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