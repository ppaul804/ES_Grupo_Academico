<?php

require_once ('../../banco/configuracao.php');

session_start();

$idEvento = $_GET['codigoEvento'];
$id = $_GET['idDisciplina'];
$descricao = $_POST["inputDescricao"];
$data = $_POST["inputData"];


mysqli_query($conexao, "UPDATE tb_evento SET des_evento='$descricao', dta_evt_evento = '$data' WHERE idt_evento='$idEvento' AND fk_idt_disciplina='$id'")or die(mysqli_error($conexao));
if(mysqli_affected_rows($conexao) > 0){
  echo "<script>alert('Evento editado com sucesso.'); </script>";
  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php?'>";
}else{
   echo "<script>alert('Falha na edição.'); </script>";
   echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php?'>";
}


?>
