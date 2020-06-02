<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao,trim($_POST['tel']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$rg = mysqli_real_escape_string($conexao, trim($_POST['rg']));
$end = mysqli_real_escape_string($conexao, trim($_POST['end']));
$est = mysqli_real_escape_string($conexao, trim($_POST['est']));
$cid = mysqli_real_escape_string($conexao, trim($_POST['cid']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$sql = "select count(*) as total from clientes where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
if($row['total'] == 1){
   $_SESSION['email_existe'] =  true;
    header('location: Form.php');
    exit;
}
$sql = "INSERT INTO clientes (nome, telefone, email, cpf, rg, endereço, cidade, estado, senha)
VALUES ('$nome', '$telefone', '$email', '$cpf', '$rg', '$end', '$est', '$cid', md5('$senha'))";
if($conexao->query($sql)=== TRUE){
    $_SESSION['cpf'] = $cpf;
    $_SESSION['senha']=$senha;
    header('Location: lg.php');
    exit();
}
