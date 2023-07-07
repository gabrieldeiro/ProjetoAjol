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

        $idprodutoCarrinho = '';
        $qtdeprodutoCarrinho = '';
        $valototalCarrinho = '';
        $valorunitarioCarrinho = '';
        $imgprodutoCarrinho = '';
        $nomeprodutoCarrinho = '';


        $sqlCarrinho = $conn->query('select itemproduto.*, produto.img_produto from itemproduto 
        inner join produto on itemproduto.id_produto_itemproduto = produto.id_produto where id_compra_itemproduto='. $idCompra);


        if($sqlCarrinho->rowCount()>=1) 
        {
            foreach ($sqlCarrinho as $row) 
            {
                $idprodutoCarrinho = $row[1];
                $qtdeprodutoCarrinho = $row[3];
                $valototalCarrinho = $row[4];
                $valorunitarioCarrinho = $row[5];
                $imgprodutoCarrinho = $row[8];
                $nomeprodutoCarrinho = $row[9];
            }
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
                        foreach ($sqlCarrinho as $row)
                        {
                            echo "
                                <div class='row'>
                                <!-- 
                                    SELECT COMEÇA AQUI
                                -->
                                <div class='col-sm-2'>
                                    <img src='../../img/prod/$row[1]/<?= $imgprodutoCarrinho ?>' class='w-100 img-fluid' alt=''><!-- temos um problema, puxa de quem ? ou faz oq? sla... vai precisar mexer no banco???..F -->
                                </div>
                                <div class='col-sm-5'>
                                    <p>
                                    <h4><?= $nomeprodutoCarrinho ?></h4>
                                    </p>
                                    <div class='row ms-1'>
                                        <p>
                                            <a href=''>Excluir</a> <!-- mudar para botão -->
                                            <a href='' class='ms-3'>Alterar</a> <!-- mudar para botão -->
                                        </p>
                                    </div>
                                </div>
                                <div class='col-sm-2 mt-2'>
                                    <input type='number' class='form-control' readonly min='1' value='<?= $qtdeprodutoCarrinho ?>' name='' id=''>
                                    <h5 class='form-text ms-1 mt-3'>Quantidade</h5> <!-- Esse cara vai ter que puxar o qtde e vai ser usado apenas para alterar o itemproduto -->
                                </div>
                                <div class='col-sm-3 text-end'>
                                    <p style='font-size: 22px;'>
                                        R$
                                        <b>
                                            <!-- Valor do produto AQUI -->
                                            <?= $valototalCarrinho ?>
                                        </b>
                                    </p>
                                </div>
                            </div>
                            <div class='row mt-2'>
                                <hr>
                            
                            
                            ";
                        } 
                        
                    ?>
                </div>
           
                    <div class="row">
                        <!-- 
                            SELECT COMEÇA AQUI
                        -->
                        <div class="col-sm-2">
                            <img src="../../img/prod/<?= $idprodutoCarrinho ?>/<?= $imgprodutoCarrinho ?>" class="w-100 img-fluid" alt=""><!-- temos um problema, puxa de quem ? ou faz oq? sla... vai precisar mexer no banco???..F -->
                        </div>
                        <div class="col-sm-5">
                            <p>
                            <h4><?= $nomeprodutoCarrinho ?></h4>
                            </p>
                            <div class="row ms-1">
                                <p>
                                    <a href="">Excluir</a> <!-- mudar para botão -->
                                    <a href="" class="ms-3">Alterar</a> <!-- mudar para botão -->
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <input type="number" class="form-control" readonly min="1" value="<?= $qtdeprodutoCarrinho ?>" name="" id="">
                            <h5 class="form-text ms-1 mt-3">Quantidade</h5> <!-- Esse cara vai ter que puxar o qtde e vai ser usado apenas para alterar o itemproduto -->
                        </div>
                        <div class="col-sm-3 text-end">
                            <p style="font-size: 22px;">
                                R$
                                <b>
                                    <!-- Valor do produto AQUI -->
                                    <?= $valototalCarrinho ?>
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <hr>
                        
                

                        <!--
                            a parte de cima tem que ser uma estrutura de repetição? acho que sim?...
                            OUTRO EXEMPLO DO SELECT AQUI
                        -->

                        <!-- <div class="col-sm-2">
                            <img src="../../img/coringa.png" class="w-100 img-fluid" alt="">
                        </div>
                        <div class="col-sm-5">
                            <p>
                            <h4>Coringa Action Figure Joker</h4>
                            </p>
                            <div class="row ms-1">
                                <p>
                                    <a href="">Excluir</a>
                                    <a href="" class="ms-3">Alterar</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <input type="number" class="form-control" min="1" name="" id="">
                            <h5 class="form-text ms-1 mt-3">Quantidade</h5>
                        </div>
                        <div class="col-sm-3 text-end">
                            <p style="font-size: 22px;">
                                R$
                                <b>
                                     Valor do produto AQUI
                                    60,90
                                </b>
                            </p>
                        </div>
                            -->
                    </div>
                </div>
            </div>
            <div class="col-sm-1">

            </div>
            <!-- 
                FAZER FICAR RELATIVO E SE MOVER DE ACORDO COM A TELA
            -->

            <!-- esse cara já é o compra? -->
            <div class="col-sm-2 card-body bg-white" style="border-radius:10px">
                <h4>Resumo de Compras</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <h5>Produtos (<?php //Quantidades 
                                        ?>)</h5>
                    </div>
                    <div class="col-sm-6 text-end">
                        <h5>R$<?php //Valor sem frete 
                                ?></h5>
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
                        <div class="col-sm-6">
                            <h4>
                                <b>
                                    Total
                                </b>
                            </h4>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-success">R$<?php //Valor Total Aqui 
                                                        ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">

            </div>
        </div>
    </form>
</body>

</html>