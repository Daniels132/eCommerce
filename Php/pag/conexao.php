<?php
define('HOST','infotecserver.mysql.database.azure.com');
define('USUARIO','treze@infotecserver');
define('SENHA','13Solutions');
define('DB','infotec');
$conexao=mysqli_connect(HOST,USUARIO,SENHA,DB) or die('Não foi possivel realizar a conexão');
?>
