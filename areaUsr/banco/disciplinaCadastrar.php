<?php

require_once ('../../banco/configuracao.php');

session_start();

$grupos = $_SESSION["grupos"];
$inputDisciplina = $_POST['inputDisciplina'];

$query = mysqli_query($conexao, "SELECT * FROM tb_disciplina WHERE nme_disciplina = '$inputDisciplina' AND fk_idt_grupo = '$grupos'") or die(mysqli_error($conexao));
$query1 = mysqli_num_rows($query);
if ($query1 == 1) {
    echo "<script>alert('Essa disciplina já existe.'); history.back();</script>";
} else {	
    mysqli_query($conexao, "INSERT INTO tb_disciplina (nme_disciplina, fk_idt_grupo) values ('$inputDisciplina', '$grupos')");
	
    echo "<script>alert('Disciplina cadastrada com sucesso.'); </script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../disciplina.php'>";
}

?>