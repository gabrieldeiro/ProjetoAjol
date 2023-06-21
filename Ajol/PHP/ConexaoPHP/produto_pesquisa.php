<?php
    include_once('conexao');

    $idProduto = '';
    $idcategoriaProduto = '';
    $nomecategoriaProduto = '';
    $nomeProduto = '';
    $marcaProduto = '';
    $datacadastroProduto = '';
    $loteProduto = '';
    $qtdeProduto = '';
    $pesoProduto = '';
    $escalaProduto = '';
    $valorProduto = '';
    $descontoProduto = '';
    $imgProduto = '';
    $img2Produto = '';
    $img3Produto = '';
    $obsProduto = '';
    $statusProduto = '';


    if($_POST)
    {
        $id = $_POST['txtId'];

        $sql = $conn->query('select produto.*, categoria.nome_categoria from produto inner join categoria on categoria.id_categoria = produto.id_categoria_produto WHERE produto.id_produto ='.$id);

        if($sql->rowCount()>=1)
        {
            foreach ($sql as $row) 
            {
                $idProduto=$row[0];
                $idcategoriaProduto=$row[1];
                $nomecategoriaProduto=$row[16];
                $nomeProduto=$row[2];
                $marcaProduto=$row[3];
                $datacadastroProduto=$row[4];
                $loteProduto=$row[5];
                $qtdeProduto=$row[6];
                $pesoProduto=$row[7];
                $escalaProduto=$row[8];
                $valorProduto=$row[9];
                $descontoProduto=$row[10];
                $imgProduto=$row[11];
                $img2Produto=$row[14];
                $img3Produto=$row[15];
                $obsProduto=$row[12];
                $statusProduto=$row[13];
            }

        }
        else
        {
            echo '<p>Produto não encontrado</p>';
        }
    }

?>



