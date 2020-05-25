<?php
define('HOST','db4free.net:3306');
define('USUARIO','ecommerceinfotec');
define('SENHA','RAfa2606');
define('DB','infotec');
$conexao=mysqli_connect(HOST,USUARIO,SENHA,DB) or die('Não foi possivel realizar a conexão');
?>
