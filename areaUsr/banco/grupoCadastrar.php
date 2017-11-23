<?php

require "../../banco/configuracao.php";

$inputGrupo = $_POST['inputGrupo'];
if($inputGrupo)

$query = mysql_query("SELECT * FROM tb_grupo WHERE nme_grupo = '$inputGrupo'") or die(mysql_error()); #FALTA SEPARAR POR USUARIOS
$query1 = mysql_num_rows($query);
if ($query1 == 1) {
    echo "<script>alert('Esse grupo já existe.'); history.back();</script>";
} else {
    mysql_query("INSERT INTO tb_grupo (nme_grupo) values ('$inputGrupo')");
    echo "<script>alert('Grupo cadastrado com sucesso.'); </script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../index.php'>";
}

?>