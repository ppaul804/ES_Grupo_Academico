<?php

require_once ('../../banco/configuracao.php');

session_start();

$nome = $_POST["inputNome"];
$nota = $_POST["inputNota"];
$id = $_GET['idDisciplina'];

mysqli_query($conexao, "INSERT INTO tb_notacao (des_notacao, aut_notacao,fk_idt_disciplina) values ('$nota', '$nome', '$id')") or die(mysqli_error($conexao));

echo "<script>alert('Nota inserida com sucesso.'); </script>";
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../inserirNota.php?idDisciplina=$id'>";

?>
