<?php 

require_once ('../../banco/configuracao.php');

session_start();

$nome = $_POST["inputNome"];
$descricao = $_POST["inputDescricao"];
$id = $_GET['idDisciplina'];

if(isset($_POST['enviar_arquivo']))
{   

 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder= "C:";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file)) {

    mysqli_query($conexao, "INSERT INTO tb_arquivo(des_arquivo,aut_arquivo,fk_idt_disciplina,tam_arquivo, tipo_arquivo, nme_arquivo)
       VALUES('$descricao', '$nome', '$id', '$new_size', '$file_type', '$final_file')")or die(mysqli_error($conexao));
						
     echo "<script>alert('Arquivo inserido com sucesso.'); </script>";
     echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../inserirArquivo.php?idDisciplina=$id'>";
	 
 }else {
  
    echo "<script>alert('Falha no envio do arquivo.'); </script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../inserirArquivo.php?idDisciplina=$id'>";
  
  }
 
}






?>