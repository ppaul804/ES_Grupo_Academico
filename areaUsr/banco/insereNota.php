<?php

session_start();

require_once ('../../banco/configuracao.php');


$nome = $_POST["inputNome"];
$nota = $_POST["inputNota"];

mysqli_query($conexao, "INSERT INTO tb_notacao (des_notacao, aut_notacao,fk_idt_disciplina,fk_idt_usuario) values ('$nota', '$nome', 1, 1)") or die(mysqli_error($conexao));

	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../inserirNota.php'>";

?>
