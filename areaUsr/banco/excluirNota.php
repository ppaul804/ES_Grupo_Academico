<?php

require_once ('../../banco/configuracao.php');

session_start();


$codigoNota = $_POST["inputCodigo"];
$id = $_GET['idDisciplina'];

mysqli_query($conexao, "DELETE FROM tb_notacao WHERE idt_notacao = '$codigoNota' AND fk_idt_disciplina = '$id'") or die(mysqli_error($conexao));

echo "<script>alert('Nota excluida com sucesso.'); </script>";
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php>";




?>