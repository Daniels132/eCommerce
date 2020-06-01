<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <a href="../index.php"><img src="../Imagens/logo.png" height="100px" class="offset-md-5"></a>
    <?php
       if(isset($_SESSION['status_cadastro'])):
    ?>
  <div class="border border-dark w-50 p-3 col-md-6 offset-md-3 progress-bar progress-bar-striped bg-success">
    <p class="text-center"><strong>cadastro efetuado</strong></p>
    <p class="text-center"><strong>faça o login informando seu cpf e senha <a href="login.php">aqui</a></strong></p>
  </div>
    <?php
        endif;
        unset($_SESSION['status_cadastro'])
    ?>
    <?php
      if(isset($_SESSION['email_existe'])):
    ?>
  <div class="border border-dark w-50 p-3 col-md-6 offset-md-3 progress-bar progress-bar-striped bg-danger">
    <p class="text-center"><strong>O email cadastrado está em uso, por favor insira outro.</strong></p>
  </div>
    <?php
      endif;
      unset($_SESSION['email_existe'])
    ?>

<form action="cad.php" method="POST">
  <div class="border border-info w-50 p-3 col-md-6 offset-md-3">
    <div class="col-md-6 offset-md-3">
      <label for="nome">Nome</label>
     <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Seu Nome">
  </div>
  <div class="col-md-6 offset-md-3">
    <label>Telefone</label>
    <input type="number" name="tel" class="form-control" aria-describedby="tel" placeholder="Apenas números" style="width: 250px;">
  </div>
  <div class="col-md-6 offset-md-3">
    <label for="email">Endereço de email</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="col-md-6 offset-md-3">
    <label for="cpf">CPF</label>
    <input type="number" name="cpf" class="form-control" id="cpf" aria-describedby="cpf" placeholder="Apenas números" style="width: 150px;">
  </div>
  <div class="col-md-6 offset-md-3">
  <label for="rg" >RG</label>
    <input type="number" name="rg" class="form-control" id="rg" aria-describedby="rg" placeholder="Apenas números" style="width: 150px;">
  </div>
  <div class="col-md-6 offset-md-3">
    <label for="end">Endereço</label>
    <input type="text" name="end" class="form-control" id="end" aria-describedby="end" placeholder="Endereço e número">
    <input type="text" name="cid" class="form-control float-left" id="cid" aria-describedby="cid" placeholder="Cidade" style="width: 150px;">
    <input type="text" name="est" class="form-control float-rigth" id="est" aria-describedby="est" placeholder="Estado" style="width: 100px;">
  </div>
  <div class="col-md-6 offset-md-3 required">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" style="width: 250px;">
  </div><br>
  <div class="col-md-6 offset-md-3">
  <button type="submit" class="btn btn-success">Cadastrar</button>
  <a href="../index.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
  </div>
  </div>
</form>

  
</body>
</html>