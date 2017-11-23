<?php

require "../../banco/configuracao.php";

$inputPesquisa = $_POST['inputPesquisa'];

$query = mysql_query("SELECT * FROM tb_grupo WHERE nme_grupo = '$inputPesquisa'") or die(mysql_error());
$query1 = mysql_num_rows($query);
if ($query1 == 1) {
    echo "<script>alert('Grupo existe.'); history.back();</script>";
} else {
    echo "<script>alert('Grupo não existe.'); history.back();</script>";
}


?>