<?php
    include_once('conexao.php');

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

        $sql = $conn->query('select * from produto where id_produto='.$id);

        if($sql->rowCount()>=1)
        {
            foreach ($sql as $row) 
            {
                $idProduto=$row[0];
                $idcategoriaProduto=$row[1];
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

            $sql = $conn->query('select * from categoria where id_categoria='.$idcategoriaProduto);
            
                foreach ($sql as $row) 
                {
                    $nomecategoriaProduto=$row[1];
                }

        }
        else
        {
            echo '<p>Produto não encontrado</p>';
        }
    }

?>



