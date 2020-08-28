<html>
<head></head>
<body>
<?php
  if($_SESSION['status_cadastro']):
?>
 <p>Cadastro efetuado!</p>
 <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
<?php
endif;
unset($_SESSION ['status_cadastro'])
?>
<?php
if($_SESSION['usuario_existe']);
?>
<form name="signup" method="post" action="cadastro.php">
 Nome: <input type ="text" name="usuario" placeholder="Nome">
 Senha: <input type="password" name="senha" placeholder="Senha" >  
<button type="submit" >Cadastrar</button>
    
    
    </form>
</body>

</html>






