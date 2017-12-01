<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Grupo Acad�mico</title>

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
        <!-- Navega��o -->
        <?php
        include 'navbar.php';
        ?>

        <!-- Page Content -->
        <section class="content-section-b" style="margin-top: 25px">
            <div class="container">
                <p class="h3 text-center"><strong>Disciplinas</strong></p>
				
                <form action="banco/disciplinaCadastrar.php" method="POST">
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
			
				<?php require "../banco/configuracao.php";
				
				session_start();
				
				$grupos = $_SESSION["grupos"];
				$query = mysqli_query($conexao, "SELECT * FROM tb_disciplina WHERE fk_idt_grupo = $grupos"); ?>
			
				<form action="" method="POST"> 
					<label>Selecionar Disciplina:</label> 
					<select id="disciplinas" name="disciplinas"> 
						<?php while($prod = mysqli_fetch_array($query)) { ?> 
							<option value="<?php echo $prod['idt_disciplina'] ?>"><?php echo $prod['nme_disciplina'] ?></option> <?php
                                $idDisciplina = $_POST["disciplinas"];																							
						} ?> 
					</select> 
					<br>
					<button class="btn btn-primary" type="submit">Selecionar</button>									
				</form>							
            </div>
        </section>
  
        <section class="content-section-b">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Nota��es</strong></p>
				                 
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <table class="table table-hover table-striped">
                            <tr>
                            <strong>
                                <th>Codigo</th>
                                <th>Autor</th>
                                <th>Nota</th>
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
            <!--Bot�es-->
            <div class="container" >
                <div>							
				
                    <form action="inserirNota.php" method "POST">                       
                         <input type="hidden" name="idDisciplina" value="<?php echo $idDisciplina; ?>" />  
						   <button id="inserir" name="" class="btn btn-primary">Inserir</button> 							
                    </form>
                <br>
                    <form action=""> 
                            <button id="editar" name="editar" class="btn btn-primary">Editar</button>
                    </form>
                <br>
                    <form action="banco/excluirNota.php?idDisciplina=<?php echo $idDisciplina; ?>" method="POST">  
                            <button id="excluir" name="excluir" class="btn btn-primary">Excluir</button> 
							  <input id="inputCodigo" name="inputCodigo" type="text">
							  <br>
							 
                    </form>

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
                                <th>Autor</th>
                                <th>Descricao</th>
                                <th>Arquivo</th>
                            </strong>
        
                            </tr>
							
							<tr>
					<?php
						$query = mysqli_query($conexao, "SELECT * FROM tb_arquivo WHERE fk_idt_disciplina = '$id_Disciplina' ");
						while($prod = mysqli_fetch_array($query)){							 
					?>	
                                <td><?php echo $prod['aut_arquivo']; ?></td>
								<td> </td>
								<td> </td>
								
                            </tr>
							
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
								
                            </tr>
							<?php 
							 } 
							?>
						</table>
			
                    </div>
                </div>
            </div>
		
            <!--Bot�es-->
			
            <div class="container">
                <div class="col-md-4 text-center"> 
				<form action="inserirArquivo.php" method "POST">
				 <input type="hidden" name="idDisciplina" value="<?php echo $idDisciplina; ?>" />  
                    <button id="inserir" name="" class="btn btn-primary">Inserir</button> 
			    </form>
		     <br>
			 <br>
			 <form action="banco/excluirArquivo.php?idDisciplina=<?php echo $idDisciplina; ?>" method="POST">  
                    <button id="excluir" name="" class="btn btn-primary">Excluir</button> 
					   <input id="inputCodigoArquivo" name="inputCodigoArquivo" type="text">
                </form>
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
            <!--Bot�es-->
            <div class="container">
                <div> 
              <form action="inserirEvento.php">                    
                 <button id="inserir" name="inserir" class="btn btn-primary">Inserir</button> 
              </form>
                <br>    
             <form action ="">                
                  <button id="editar" name="editar" class="btn btn-primary">Editar</button> 
             </form>
                  <br>
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