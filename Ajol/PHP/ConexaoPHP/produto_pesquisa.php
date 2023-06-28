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
    $dimensaoProduto = '';
    $valorunitario_produto = '';
    $valorcusto_produto='';
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
                $dimensaoProduto=$row[8];
                $escalaProduto=$row[9];
                $valorunitario_produto=$row[10];
                $valorcusto_produto=$row[11];
                $descontoProduto=$row[12];
                $imgProduto=$row[13];
                $img2Produto=$row[14];
                $img3Produto=$row[15];
                $obsProduto=$row[16];
                $statusProduto=$row[17];
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



