<?php
session_start();
include('conexao.php');
if (!empty($_POST['input'])) {
    $p = mysqli_real_escape_string($conexao, $_POST['input']);
    $produto = mysqli_query($conexao, "select id from Produtos where Nome ='{$p}'") or die("Erro");
    $produto = mysqli_fetch_assoc($produto);
    $produto = $produto['id'];
    $produto = intval($produto);
    $q = mysqli_query($conexao, "select quantidade from estoque where produto_id ={$produto}");
    $q = mysqli_fetch_assoc($q);
    $q = $q['quantidade'];
    $qproduto = intval($q);
    $qproduto--;
    echo $produto . " " . $qproduto;
    $queryp = "insert into pedidos(cliente_id,produto_id,QtdEstoque,status) values ({$_SESSION['id']},{$produto},{$qproduto},'N')";
    $querye = "update estoque set quantidade = {$qproduto} where produto_id = {$produto}";
    $resultp = mysqli_query($conexao, $queryp);
    $resulte = mysqli_query($conexao, $querye);
    unset($_SESSION['compra']);
    header("Location: ../index.php");
    exit();
}
else if (empty($_POST['cpf']) || empty($_POST['senha'])) {
    header('Location: login.php');
    exit();
} else {
    $usuario = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $query = "select nome from clientes where cpf ={$usuario} and senha =md5({$senha})";
    $id = mysqli_query($conexao, "select id from clientes where cpf ={$usuario} and senha =md5({$senha})");
    $id = mysqli_fetch_assoc($id);
    $id = $id['id'];
    $result = mysqli_query($conexao, $query);
    $n = mysqli_fetch_assoc($result);
    $nome = $n['nome'];
    $row = mysqli_num_rows($result);
    if ($row == 1) {
        $_SESSION['usuario'] = $nome;
        $_SESSION['id'] = $id;
        header('Location: ../index.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: login.php');
        exit();
    }
}
