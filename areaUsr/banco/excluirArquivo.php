<?php

require_once ('../../banco/configuracao.php');

session_start();


$codigoArquivo = $_POST["inputCodigoArquivo"];
$id = $_GET['idDisciplina'];

mysqli_query($conexao, "DELETE FROM tb_arquivo WHERE idt_arquivo = '$codigoArquivo' AND fk_idt_disciplina = '$id'") or die(mysqli_error($conexao));

echo "<script>alert('Arquivo excluído com sucesso.'); </script>";
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php>";




?>