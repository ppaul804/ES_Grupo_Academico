<?php

require_once ('../../banco/configuracao.php');

session_start();

$inputPesquisa = $_POST['inputPesquisa'];
$idt_usuario = $_SESSION["idt_usuario"];

$query = mysqli_query($conexao, "SELECT (idt_grupo) FROM tb_grupo WHERE nme_grupo = '$inputPesquisa'") or die(mysqli_error($conexao));
$query1 = mysqli_num_rows($query);
if ($query1 == 1) {
	$dados = mysqli_fetch_array($query);
	$idt_grupo = $dados["idt_grupo"];
	mysqli_query($conexao, "INSERT INTO ta_usuario_grupo (fk_idt_usuario, fk_idt_grupo) VALUES ($idt_usuario, $idt_grupo)");	
	
    echo "<script>alert('Você entrou nesse grupo!'); history.back();</script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../grupo.php'>";
} else {	
    echo "<script>alert('Grupo não existe.'); history.back();</script>";
}


?>