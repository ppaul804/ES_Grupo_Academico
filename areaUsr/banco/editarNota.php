<?php

require_once ('../../banco/configuracao.php');

session_start();

$idNota = $_GET['codigoNota'];
$id = $_GET['idDisciplina'];
$nota = $_POST["inputNota"];


mysqli_query($conexao, "UPDATE tb_notacao SET des_notacao='$nota' WHERE idt_notacao='$idNota' AND fk_idt_disciplina='$id'")or die(mysqli_error($conexao));
if(mysqli_affected_rows($conexao) > 0){
  echo "<script>alert('Nota editada com sucesso.'); </script>";
  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php?'>";
}else{
   echo "<script>alert('Falha na edição.'); </script>";
   echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php?'>";
}


?>
