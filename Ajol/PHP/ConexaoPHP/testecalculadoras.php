<body>
<html>

<h1> sdddd </h1>


<?php
 include_once "conexao.php"
 ?>

<?php 

$query_valor = "select sum(qtde_produto + valorunitario_produto) as valormulti from produto";
$result_valor = $conn->prepare($query_valor);
$result_valor->execute();

$row_valor = $result_valor->fetch(PDO::FETCH_ASSOC);
echo "valor multiplicado:". number_format($row_valor['valormulti'], 2,",", ".") . "<br><br>";





?>




 </body>
</html>
