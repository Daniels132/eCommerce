<?php
session_start();
include('conexao.php');
if (!empty($_POST['input'])) :
    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');
        exit();
    }
    $data = date("Y-m-d");
    $p = mysqli_real_escape_string($conexao, $_POST['input']);
    $preco = mysqli_query($conexao, "select preco_venda from Produtos where Nome ='{$p}'") or die("Erro");
    $preco = mysqli_fetch_assoc($preco);
    $preco = $preco['preco_venda'];
    $preco = intval($preco);
    $produto = mysqli_query($conexao, "select id from Produtos where Nome ='{$p}'") or die("Erro");
    $produto = mysqli_fetch_assoc($produto);
    $produto = $produto['id'];
    $produto = intval($produto);
    $q = mysqli_query($conexao, "select quantidade from estoque where produto_id ={$produto}");
    $q = mysqli_fetch_assoc($q);
    $q = $q['quantidade'];
    $qproduto = intval($q);
    $qproduto--;
    $queryp = "insert into pedidos(cliente_id,produto_id,QtdEstoque,status) values ({$_SESSION['id']},{$produto},{$qproduto},'N')";
    $querye = "update estoque set quantidade = {$qproduto} where produto_id = {$produto}";
    $queryv = "insert into vendas (data,id_cliente,id_produto) values ('{$data}',{$_SESSION['id']},{$produto})";
    $resultp = mysqli_query($conexao, $queryp);
    $resulte = mysqli_query($conexao, $querye);
    $resultv = mysqli_query($conexao, $queryv) or die("Erro venda");
    $_SESSION['produto'] = $_POST['input'];
    $_SESSION['preco'] = $preco;
    header("Location: pdf.php");
    exit();
endif;
if ((empty($_POST['cpf']) || empty($_POST['senha'])) && (!isset($_SESSION['cpf']))) {
    header('Location: login.php');
    exit();
} else if (isset($_SESSION['cpf'])) {
    $cpf = mysqli_real_escape_string($conexao, $_SESSION['cpf']);
    $senha = mysqli_real_escape_string($conexao, $_SESSION['senha']);
    $query = "select nome from clientes where cpf ={$cpf} and senha =md5({$senha})";
    $id = mysqli_query($conexao, "select id from clientes where cpf ={$cpf} and senha =md5({$senha})");
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
    }
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
