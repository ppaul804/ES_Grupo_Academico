<?php

require_once ('../../banco/configuracao.php');

session_start();


$codigoEvento = $_POST["inputCodigoEvento"];
$id = $_GET['idDisciplina'];

mysqli_query($conexao, "DELETE FROM tb_evento WHERE idt_evento = '$codigoEvento' AND fk_idt_disciplina = '$id'") or die(mysqli_error($conexao));

if(mysqli_affected_rows($conexao) > 0){
  echo "<script>alert('Evento excluído com sucesso.'); </script>";
  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php?idDisciplina='>";
}else{
   echo "<script>alert('Falha na exclusão do evento.'); </script>";
   echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php?idDisciplina='>";
}



?>