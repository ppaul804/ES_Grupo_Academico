<?php

require "configuracao.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = mysqli_query($conexao, "SELECT * FROM tb_usuario WHERE usr_usuario = '$usuario'") or die(mysqli_error($conexao));
$query1 = mysqli_num_rows($query);
if ($query1 == 1) {
    echo "<script>alert('Esse login já existe.'); history.back();</script>";
} else {
    mysqli_query($conexao, "INSERT INTO tb_usuario (usr_usuario, pwd_usuario) VALUES ('$usuario','$senha')");
    echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../login.php'>";
}
?>