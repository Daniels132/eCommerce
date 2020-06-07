<?php
session_start();
include('conexao.php');
if (
    !empty($_POST['nome']) && !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['cpf']) && !empty($_POST['rg']) &&
    !empty($_POST['endereco']) && !empty($_POST['estado']) && !empty($_POST['cidade']) && !empty($_POST['senha'])
) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
    $rg = mysqli_real_escape_string($conexao, trim($_POST['rg']));
    $end = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $est = mysqli_real_escape_string($conexao, trim($_POST['estado']));
    $cid = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
    $sql = "select count(*) as total from clientes where email = '$email'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['total'] == 1) {
        $_SESSION['email_existe'] =  true;
        header('location: Form.php');
        exit;
    }
    $sql = "select count(*) as total from clientes where cpf = '$cpf'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['total'] == 1) {
        $_SESSION['cpf_existe'] =  true;
        header('location: Form.php');
        exit;
    }
    $sql = "INSERT INTO clientes (nome, telefone, email, cpf, rg, endereço, cidade, estado, senha)
VALUES ('$nome', '$telefone', '$email', '$cpf', '$rg', '$end', '$est', '$cid', md5('$senha'))";
    if ($conexao->query($sql) === TRUE) {
        $_SESSION['cpf'] = $cpf;
        $_SESSION['senha'] = $senha;
        header('Location: lg.php');
        exit();
    }
}
else{
    $_SESSION['campoVazio']=true;
    header("Location:Form.php");
    exit();
}
