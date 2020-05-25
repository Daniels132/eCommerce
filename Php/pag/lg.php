<?php
session_start();
include('conexao.php');
if (empty($_POST['cpf']) || empty($_POST['senha'])) {
    header('Location: login.php');
    exit();
}
$usuario=mysqli_real_escape_string($conexao,$_POST['cpf']);
$senha=mysqli_real_escape_string($conexao,$_POST['senha']);
$query="select nome from clientes where cpf ={$usuario} and senha =md5({$senha})";
$result=mysqli_query($conexao,$query);
$n=mysqli_fetch_assoc($result);
$nome=$n['nome'];
$row=mysqli_num_rows($result);
if($row==1){
    $_SESSION['usuario']=$nome;
    header('Location: ../index.php');
    exit();
}else{
    $_SESSION['nao_autenticado']=true;
    header('Location: login.php');
    exit();
}

?>