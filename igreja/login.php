<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where nome = '{$nome}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

$row = mysqli_num_rows($result);

if($row ==0) {
	$_SESSION['usuario'] = $nome;
	header('Location: painel.php');
	exit();
} else {
	header('Location: index.php');
	exit();
}