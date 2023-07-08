<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <?php
    include_once('../ConexaoPHP/conexao.php');
    include_once('../ConexaoPHP/loginautenticar.php');
    ?>
</head>

<body>
    <?php
    include_once('topo2.php')
    ?>
    <?php

    //se o produto for puxado
    if ($_POST) {
        $ID = $_POST['txtID'];
        $Quantidade = $_POST['txtQuantidade'];

        //Pesquisar pelo produto pelo ID puxado do detalhes produto
        $sql = $conn->query('select * from produto where id_produto=' . $ID);

        if ($sql->rowCount() >= 1) {
            foreach ($sql as $row) {
                $idProduto = $row[0];
                $idcategoriaProduto = $row[1];
                $nomeProduto = $row[2];
                $marcaProduto = $row[3];
                $datacadastroProduto = $row[4];
                $loteProduto = $row[5];
                $qtdeProduto = $row[6];
                $pesoProduto = $row[7];
                $dimensaoProduto = $row[8];
                $escalaProduto = $row[9];
                $valorunitario_produto = $row[10];
                $valorcusto_produto = $row[11];
                $descontoProduto = $row[12];
                $imgProduto = $row[13];
                $img2Produto = $row[14];
                $img3Produto = $row[15];
                $obsProduto = $row[16];
                $statusProduto = $row[17];
            }

            $CvalorProduto = $Quantidade * $valorunitario_produto;
        }
        try {
            $sqlCompra = $conn->prepare("insert into itemproduto
        (            
            id_produto_itemproduto,
            id_compra_itemproduto,
            qtde_itemproduto,
            valortotal_itemproduto,
            valorunitario_itemproduto
        )
        value
        (
            :id_produto_itemproduto,
            :id_compra_itemproduto,
            :qtde_itemproduto,
            :valortotal_itemproduto,
            :valorunitario_itemproduto
        )
        ");
            $sqlCompra->execute(array(
            ':id_produto_itemproduto'=>$idProduto,
            ':id_compra_itemproduto'=>$idCompra,
            ':qtde_itemproduto'=>$Quantidade,
            ':valortotal_itemproduto'=>$CvalorProduto,
            ':valorunitario_itemproduto'=>$valorunitario_produto
            ));
        } 
        catch (PDOException $erro) 
        {
            echo $erro->getMessage();
        }
    }



    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container-fluid p-3" style="background-color: #404040;">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-6 card-body bg-white" style="border-radius: 10px;">
                <div class="col-sm-12">
                    <div class="row">
                        <h4>Produtos</h4>
                        <hr>
                    </div>
                    
                    <?php 

                        $sqlCarrinho = $conn->query('select itemproduto.*, produto.img_produto, produto.nome_produto from itemproduto 
                        inner join produto on itemproduto.id_produto_itemproduto = produto.id_produto where id_compra_itemproduto='. $idCompra);
                
                        if($sqlCarrinho->rowCount()>=1) 
                        {
                            $contteste = 0;
                            $vlparc = 0;
                            

                            foreach ($sqlCarrinho as $row)
                            {   
                                $contteste++;

                                echo 
                                "
                                <div class='row'>
                                    <div class='col-sm-2'>
                                        <img src='../../img/prod/$row[1]/$row[8]' class='w-100 img-fluid' alt=''>
                                    </div>
                                    <div class='col-sm-5'>
                                        <p>
                                        <h4>$row[9]</h4>
                                        </p>
                                        <div class='row ms-1'>
                                            <p>
                                                <a href=''>Excluir</a> <!-- mudar para botão -->
                                                <a href='' class='ms-3'>Alterar</a> <!-- mudar para botão -->
                                            </p>
                                        </div>
                                    </div>
                                    <div class='col-sm-2 mt-2'>
                                        <input type='number' class='form-control' min='1' value='$row[3]' name='txtQtde' id='txtQtde'>
                                        <h5 class='form-text ms-1 mt-3'>Quantidade</h5> 
                                    </div>
                                    <div class='col-sm-3 text-end'>
                                        <p style='font-size: 22px;'>
                                            R$
                                            <b>
                                                <!-- Valor do produto AQUI -->
                                                $row[4]
                                            </b>
                                        </p>
                                    </div>
                                </div>

                                ";
                                
                            }
                           
                        } 
                        
                    ?>
                </div>

            </div>
            <div class="col-sm-1">

            </div>
            <!-- 
                FAZER FICAR RELATIVO E SE MOVER DE ACORDO COM A TELA
            -->

            <?php
                $sqlConta = $conn->query('select sum(valortotal_itemproduto) from itemproduto where id_compra_itemproduto ='. $idCompra);
                
                $vltotal = '';

                if($sqlConta->rowCount()>=1) 
                {
                     
                    foreach ($sqlConta as $row)
                    {   
                        $vltotal = $row[0];
                    }
                }

                $sqlContaf = $conn->query('select sum(valortotal_itemproduto)+20  from itemproduto where id_compra_itemproduto ='. $idCompra);
                
                $vltotalf = '';

                if($sqlContaf->rowCount()>=1) 
                {
                     
                    foreach ($sqlContaf as $row)
                    {   
                        $vltotalf = $row[0];
                    }
                }

            ?>
            <div class="col-sm-2 card-body bg-white" style="border-radius:10px">
                <h4>Resumo de Compras</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <h5>Produtos (<?=$contteste?>)</h5>
                    </div>
                    <div class="col-sm-6 text-end">
                        <h5>R$<?=$vltotal?></h5>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-6">
                        <h5>Frete</h5>
                    </div>
                    <div class="col-sm-6 text-end">
                        <h5 class="text-success">R$ 20,00</h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Cupom" name="txtCupom" id="txtCupom">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 text-center">
                        <div class="col-sm-3">
                            <h4>
                                <b>
                                    Total
                                </b>
                            </h4>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="text-success">R$
                            <?=$vltotalf?></h4>
                        </div>
                    </div>
                </div>
                <button name="btoCadastrar" class="btn btn-success" formaction="#">COMPRAR</button>
            </div>
                
            <div class="col-sm-1">

            </div>
        </div>
    </form>
</body>

</html>