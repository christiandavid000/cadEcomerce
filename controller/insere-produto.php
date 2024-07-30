<?php
include_once('controller/conexao.php');
 
$categoria      = $POST['seleciona_categoria'];
$marca          = $POST['seleciona_marca'];
$nome_produto   = $POST['nome'];
$descricao      = $POST['descricao'];
$estoque        = $POST['estoque'];
$preco          = $POST['preco'];
$grava_produto = "INSERT INTO" produtos('IDCATEGORIA');

$grava_produto = "INSERT INTO produtos('IDCATEGORIA', 'IDMARCA', 'NOME`, `DESCRICAO`, `ESTOQUE`, `PRECO') VALUES
('$categoria', '$marca', '$nome_produto', '$descricao', '$estoque', '$preco')";
 
$result_gravacao = mysqli_query($mysqli, $grava_produto);

if(mysqlli_affected_rows($mysqli) != 0){
    echo "
    <META HTTP-EQUIVE=REFRESH CONTENT = '0;>URL=produtos.php'>
    <script type=\"text/javascript\">
    alert('Produto nao cadastrado');
    </script>
    ";      
}

