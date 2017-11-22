<?php

require "configuracao.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = mysql_query("SELECT * FROM tb_usuario WHERE usr_usuario = '$usuario'") or die(mysql_error());
$query1 = mysql_num_rows($query);
if ($query1 == 1) {
    echo "<script>alert('Esse login já existe.'); history.back();</script>";
} else {
    mysql_query("INSERT INTO tb_usuario (usr_usuario, pwd_usuario) values ('$usuario','$senha')");
    echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../login.php'>";
}
?>