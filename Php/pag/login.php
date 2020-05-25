<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="../CSS/login.css" rel="stylesheet" id="bootstrap-css">
  <link rel="shortcut icon" type="image/x-icon" href="../Imagens/Logo.png">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Login</title>
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first">
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
          <div id="erro">CPF ou senha inválidos</div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <img src="../Imagens/Logo.png" id="icon" />
      </div>

      <form action="lg.php" method="POST">
        <input type="text" id="login" class="fadeIn second" name="cpf" placeholder="CPF">
        <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <div id="formFooter">
        <a class="underlineHover" href="Form.php">Crie uma conta</a>
      </div>

    </div>
  </div>
</body>

</html>