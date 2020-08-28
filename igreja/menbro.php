<html lang='pt'>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    
    
</head>
<?php
include 'painel.php';
?>
<body>
<div class="container text-center">
<div class="row">
<h4>CADASTRO DE MENBRO</h4>
</div>

<form>
  <div class="row">
    <div class="col-1">
    Nome
    </div>
    <div class="col-3">
      <input type="text" class="form-control" placeholder="Nome">
    </div>
    <div class="col-1.5">
    Sobre nome
    </div>
    <div class="col-3">
      <input type="text" class="form-control" placeholder="Sobre nome">
    </div>
  
  <form>
    <div class="col">
    <div class="form-group col-md-4">
      <label for="inputState">Congregação</label>
    </div>
    </div>
      <div class="col">
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    </div>
      <input type="text" class="form-control" placeholder="">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>
