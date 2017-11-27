<?php

require_once ('../../banco/configuracao.php');

session_start();

$inputGrupo = $_POST['inputGrupo'];
$idt_usuario = $_SESSION["idt_usuario"];

$query = mysqli_query($conexao, "SELECT * FROM tb_grupo WHERE nme_grupo = '$inputGrupo'") or die(mysqli_error($conexao));
$query1 = mysqli_num_rows($query);
if ($query1 == 1) {
    echo "<script>alert('Esse grupo já existe.'); history.back();</script>";
} else {	
    mysqli_query($conexao, "INSERT INTO tb_grupo (nme_grupo) values ('$inputGrupo')");
	mysqli_query($conexao, "INSERT INTO ta_usuario_grupo (fk_idt_usuario, fk_idt_grupo) values ($idt_usuario, (SELECT idt_grupo FROM tb_grupo WHERE nme_grupo = '$inputGrupo'))");
	
    echo "<script>alert('Grupo cadastrado com sucesso.'); </script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../grupo.php'>";
}

?>