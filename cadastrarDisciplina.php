<?php

require "configuracao.php";

$inputDisciplina = $_POST['inputDisciplina'];

$query = mysql_query("SELECT * FROM tb_disciplina WHERE nme_disciplina = '$inputDisciplina'") or die(mysql_error());
$query1 = mysql_num_rows($query);
if ($query1 == 1) {
    echo "<script>alert('Essa disciplina já existe.'); history.back();</script>";
} else {
    mysql_query("INSERT INTO tb_disciplina (nme_disciplina) values ('$inputDisciplina')"); #É PRECISO DO SEMESTRE E DO GRUPO
    echo "<script>alert('Disciplina cadastrada com sucesso.');</script>";
    #echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../login.php'>";
}


?>