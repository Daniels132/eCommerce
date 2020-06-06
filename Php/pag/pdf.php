<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
$nome=$_SESSION['usuario'];
$produto=$_SESSION['produto'];
$preco1=$_SESSION['preco'];
$preco=$preco1+0;
$preco="$preco";
$pagina="
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin-left: 50px;
                margin-right: 550px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            #to{
                color: rgb(6, 97, 97);
            }
        </style>
    </head>
<body>
   <header>
       <h3>Resumo da compra</h3>
   </header> 
   <section >
       <div>
           <p>Nome : {$nome}</p>
           <p>Produto : {$produto}</p>
           <p>Preço sem desconto : R$ {$preco},99</p>
       </div>
       <div>
           <hr>
           <p><b>Total: <span id='to'>R$ {$preco},99</span></b></p>
       </div>
   </section>
</body>
</html>

";
$arquivo="Recibo.pdf";
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($pagina);
$mpdf->Output($arquivo, 'I');
?>