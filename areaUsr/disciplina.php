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
        
        <!--Criar Nova Disciplina-->
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

        <!--Selecionar Disciplina-->
        <section class="content-section-a">
            <div class="container">

                <?php
                require "../banco/configuracao.php";

                session_start();

                $grupos = $_SESSION["grupos"];
                $query = mysqli_query($conexao, "SELECT * FROM tb_disciplina WHERE fk_idt_grupo = $grupos");
                ?>

                <form action="" method="POST"> 
                    <label>Selecionar Disciplina:</label> 
                    <select id="disciplinas" name="disciplinas"> 
                        <?php while ($prod = mysqli_fetch_array($query)) { ?> 
                            <option value="<?php echo $prod['idt_disciplina'] ?>"><?php echo $prod['nme_disciplina'] ?></option> <?php
                        $idDisciplina = $_POST["disciplinas"];
                    }
                        ?> 
                    </select> 
                    <br>
                    <button class="btn btn-primary" type="submit">Selecionar</button>									
                </form>							
            </div>
        </section>

        <!--Notações-->
        <?php $query = mysqli_query($conexao, "SELECT * FROM tb_notacao WHERE fk_idt_disciplina = $idDisciplina"); ?>	
        <section class="content-section-b">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Notações</strong></p>
                <br>
                <div class="row">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4 text-center" >
                        <table class="table table-hover table-striped">
                            <tr>
                            <strong>
                                <th>Código</th>
                                <th>Autor</th>
                                <th>Nota</th>
                            </strong>
                            </tr>
                            <?php while($prod2 = mysqli_fetch_array($query)) { ?> 
                            <tr>
                                <td><?php echo $prod2['idt_notacao'] ?></td>
                                <td><?php echo $prod2['aut_notacao'] ?></td>
                                <td><?php echo $prod2['des_notacao'] ?></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                  <?php } ?>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
            </div>
            <!--Botões-->
            <div class="row" >
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4 text-center">
                    <form action="inserirNota.php" method="POST">                       
                        <input type="hidden" name="idDisciplina" value="<?php echo $idDisciplina; ?>" />  
                        <button id="inserir" name="" class="btn btn-primary">Inserir</button> 							
                    </form>
                    <br>
                    <form action="editaNota.php?idDisciplina=<?php echo $idDisciplina; ?>" method="POST"> 
                        <button id="editar" name="editar" class="btn btn-primary">Editar</button>
                        <input id="inputCodigoEditar" name="inputCodigoEditar" type="text">
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

        <!--Arquivos-->
         <?php $query = mysqli_query($conexao, "SELECT * FROM tb_arquivo WHERE fk_idt_disciplina = $idDisciplina"); ?>    
        <section class="content-section-a">
            <div class="conteiner">

                <p class="h4 text-center"><strong>Arquivos</strong></p>
                <br>
                <div class="row">
                <label class="col-md-4 control-label"></label>
                    <div class="col-md-4 text-center">
                        <table class="table table-hover table-striped">
                            <tr>	
                            <strong>
                                <th>Código</th>
                                <th>Autor</th>
                                <th>Descrição</th>
                                <th>Arquivo</th>
                            </strong>
                            </tr>
                             <?php while($prod3 = mysqli_fetch_array($query)) { ?>
                            <tr>							
                                <td><?php echo $prod3['idt_arquivo'] ?></td>
				<td><?php echo $prod3['aut_arquivo'] ?></td>
				<td><?php echo $prod3['des_arquivo'] ?></td>
				<td><a href="C:<?php echo $prod3['nme_arquivo'] ?>" target="_blank">Acessar Arquivo</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>

            <!--Botões-->

            <div class="row">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4 text-center"> 
                    <form action="inserirArquivo.php" method="POST">
                          <input type="hidden" name="idDisciplina" value="<?php echo $idDisciplina; ?>" />  
                        <button id="inserir" name="" class="btn btn-primary">Inserir</button> 
                    </form>
                    <br>	 
                    <form action="banco/excluirArquivo.php?idDisciplina=<?php echo $idDisciplina; ?>" method="POST">  
                        <button id="excluir" name="" class="btn btn-primary">Excluir</button> 
                        <input id="inputCodigoArquivo" name="inputCodigoArquivo" type="text">
                    </form>
                </div>
            </div>
        </section>

        <!--Eventos-->
        <?php $query = mysqli_query($conexao, "SELECT * FROM tb_evento WHERE fk_idt_disciplina = $idDisciplina"); ?>
        <section class="content-section-b">
            <div class="conteiner">
                <p class="h4 text-center"><strong>Eventos</strong></p>
                <br>
                <div class="row">
                <label class="col-md-4 control-label"></label>
                    <div class="col-md-4 text-center">
                        <table class="table table-hover table-striped">

                            <tr>
                            <strong>
                                <th>Código</th>
                                <th>Descrição</th>
                                <th>Data do Evento</th>
                            </strong>
                            </tr>
                            <?php while($prod4 = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $prod4['idt_evento'] ?></td>
                                <td><?php echo $prod4['des_evento'] ?></td>
                                  <td><?php  $timestamp = strtotime($prod4[dta_evt_evento]); 
					     echo date('d/m/Y', $timestamp); ?></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <!--Botões-->
            <div class="row">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4 text-center">
                    <form action="inserirEvento.php?idDisciplina=<?php echo $idDisciplina; ?>" method="POST">                    
                        <button id="inserir" name="inserir" class="btn btn-primary">Inserir</button> 
                    </form>
                    <br>    
                    <form action="editaEvento.php?idDisciplina=<?php echo $idDisciplina; ?>" method="POST">                
                        <button id="editar" name="editar" class="btn btn-primary">Editar</button> 
                        <input id="inputCodigoEventoEditar" name="inputCodigoEventoEditar" type="text">
                    </form>
                    <br>
                    <form action="banco/excluirEvento.php?idDisciplina=<?php echo $idDisciplina; ?>" method="POST">  
                        <button id="excluir" name="excluir" class="btn btn-primary">Excluir</button>
                        <input id="inputCodigoEvento" name="inputCodigoEvento" type="text">
                    </form>
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
