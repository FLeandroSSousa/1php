<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IGREJA</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    
</head>

<body>
    <div class="row">
    <img src="img/brasaozelina.png" class="rounded mx-auto d-block">
    </div>
    <div class="row">            
            <div class="container mt-5">
                <div class="card text-center "> 
                    <h3 class="card-title ">IGREJA</h3>
                    <h3 class="car-text">A PAZ DO SENHOR</h3>                    
                   
                      <!--p>ERRO: Usuário ou senha inválidos.</p-->
                                   
                <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                USUARIO</br>
                                    <input name="usuario" name="text" class="input is-large" >
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                SENHA </br>
                                    <input name="senha" class="input is-large mb-3" type="password" >
                                </div>
                            </div>

                            
                              <button type="button" class="btn btn-dark">  <a href="cadastra.php">Cadastrar</a></button>
                            
                            <button type="submit" class="btn btn-dark">Entrar</button>
                        </form>
                   
                </div>
            </div>
        </div>
    </div>
</body>

</html>