<?php

session_start();

require_once ('../../banco/configuracao.php');

$descricao = $_POST["inputDescricao"];
$data = $_POST["inputData"];
$id = $_GET['idDisciplina'];

mysqli_query($conexao, "INSERT INTO tb_evento (des_evento, dta_evt_evento, fk_idt_disciplina) values ('$descricao', '$data', '$id')") or die(mysqli_error($conexao));
if(mysqli_affected_rows($conexao) > 0){
  echo "<script>alert('Evento inserido com sucesso.'); </script>";
  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../inserirEvento.php?idDisciplina=$id'>";
}else{
   echo "<script>alert('Falha na inserção do evento.'); </script>";
   echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../inserirEvento.php?idDisciplina=$id'>";
}
?>
