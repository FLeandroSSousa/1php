<!DOCTYPE html>
<?php
session_start();
include('verifica_login.php');
?>

<html lang='pt'>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    
    
</head>

<body>


<div class="container">
    <div class="row">
     <picture><img src="img/brasaozelina.PNG"></picture>
        <div class='ml-auto '>
          <h4>A PAZ DO SENHOR...<?php echo $_SESSION['usuario'];?></h4><br/>
          <h3><a href="logout.php">SAIR</A> </h3>
        </div>
    </div>
  <div class="row">
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cadastra
        </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="#">Igreja</a>
        <a class="dropdown-item" href=" menbro.php">Menbros</a>
      </div>
    </div>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        EBD
        </button>
       <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="#">Dropdown link</a>
          <a class="dropdown-item" href="#">Dropdrown link</a>
        </div>
    </div>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        FINACEIRO
        </button>
       <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="#">Dropdown link</a>
          <a class="dropdown-item" href="#">Dropdrown link</a>
        </div>
    </div>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        PATRIMONIO
        </button>
       <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="#">Dropdown link</a>
          <a class="dropdown-item" href="#">Dropdrown link</a>
        </div>
    </div>


  </div>

</div>          

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>

<script src="js/jquery.js"></script>


</body>

