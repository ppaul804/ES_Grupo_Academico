<?php

require "configuracao.php";

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//$senha = md5($_POST['senha']);

$query = mysqli_query($conexao, "SELECT idt_usuario, usr_usuario FROM tb_usuario WHERE usr_usuario='$usuario' AND pwd_usuario='$senha'") or die(mysqli_error($conexao));
$total = mysqli_num_rows($query);

if ($total == 1) {
    $dados = mysqli_fetch_array($result);
    $_SESSION["idt_usuario"] = $dados["idt_usuario"];
	$_SESSION["usr_usuario"] = stripslashes($dados["usr_usuario"]);

    header("Location: ..\\areaUsr\\grupo.php"); 
    exit;
} else {
    echo "<script>alert('Login e/ou senha incorreto(s)'); history.back();</script>";
}
?>