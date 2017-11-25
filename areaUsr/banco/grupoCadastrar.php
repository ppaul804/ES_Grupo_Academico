<?php

require_once ('../../banco/configuracao.php');

session_start();

$inputGrupo = $_POST['inputGrupo'];
$idt_usuario = $_SESSION["idt_usuario"];

$query = mysql_query("SELECT * FROM tb_grupo WHERE nme_grupo = '$inputGrupo'") or die(mysql_error());
$query1 = mysql_num_rows($query);
if ($query1 == 1) {
    echo "<script>alert('Esse grupo já existe.'); history.back();</script>";
} else {	
    mysql_query("INSERT INTO tb_grupo (nme_grupo) values ('$inputGrupo')");
	mysql_query("INSERT INTO ta_usuario_grupo (fk_idt_usuario, fk_idt_grupo) values ($idt_usuario, (SELECT idt_grupo FROM tb_grupo WHERE nme_grupo = '$inputGrupo'))");
	
    echo "<script>alert('Grupo cadastrado com sucesso.'); </script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../grupo.php'>";
}

?>