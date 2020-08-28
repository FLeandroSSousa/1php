<?php
session_start();
include(conexao.php);

$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'"; 
$result = mysqli_query($conexao, $query);
$row = mysqli_run_rows($result);

if($row ['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastra.php');
    exit;
} 
$sql = "INSERT INTO usuario (usuario, senha, data_cadastro) VALUES ('$usuario', '$senha', NOW()) ";

if ($usuario->query($sql) == TRUE){
    $_SESSION['status_cadastro'] = true;


}
$conexao->close();
header('Location: cadastra.php');
exit;


?>