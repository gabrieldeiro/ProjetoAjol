<!DOCTYPE html>
<html lang="pt-br">
<!-- QUALQUER COISA -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once('../ConexaoPHP/conexao.php');
    ?>
    <title>
        <?php
        $sql = $conn->query('select * from produto where id_produto=' . $_GET['id']);
        if ($sql->rowCount() >= 1) {
            foreach ($sql as $row3) {
                $nome = $row3[2];
            }
        }
        echo $nome;
        ?>
    </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <?php
    $sql = $conn->query('select * from produto where id_produto=' . $_GET['id']);

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
    }

    $sqlCategoria = $conn->query('select * from categoria where id_categoria=' . $idcategoriaProduto);

    if ($sqlCategoria->rowCount() >= 1) {
        foreach ($sqlCategoria as $row2) {
            $idCategoria = $row2[0];
            $nomeCategoria = $row2[1];
            $descricaoCategoria = $row2[2];
            $obsCategoria = $row2[3];
            $statusCategoria = $row2[4];
        }
    }
    ?>
</head>

<body>
    <?php
    include_once('../ConexaoPHP/loginautenticar.php');
    include_once('topoDefinitivo.php');
    ?>
    <div class="container-fluid" style="background-color: #404040;">
        <!-- Pegar ID -->
        <input type="text" hidden name="txtIdtemp" id="txtIdtemp" value="<?= $_GET['id'] ?>">
        <div class="row mt-5">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8 bg-white p-3 mt-4" style="border-radius: 5px;">
                <div class="col-sm-12">
                    <div class="col-sm-2 mt-4">
                        <p>
                            <img src="../../img/prod/<?= $idProduto ?>/<?= $imgProduto ?>" class="img-thumbnail w-75" alt="">
                        </p>
                        <p>
                            <img src="../../img/prod/<?= $idProduto ?>/<?= $imgProduto ?>" class="img-thumbnail w-75" alt="">
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="../../img/prod/<?= $idProduto ?>/<?= $imgProduto ?>" class="w-100 img-fluid" alt="">
                    </div>
                    <div class="col-sm-4 border border-1 mt-4" style="border-radius: 12px;">
                        <h5 class="form-text ms-3 mt-4">
                            <?= $nomeCategoria ?>
                        </h5>
                        <h3 class="ms-3">
                            <?= $nomeProduto ?>
                        </h3>
                        <hr>
                        <div class="row">
                            <h3 class="ms-3 mt-2" style="font-size: 30px;">
                                R$ <?= $valorunitario_produto ?>
                            </h3>
                        </div>
                        <div class="row">
                            <h5 class="form-text ms-3 mt-3">
                                <?php
                                echo '<p> Dimensão: ' . $dimensaoProduto . '</p>';
                                echo '<p> Lote: ' . $loteProduto . '</p>';
                                echo '<p> Peso: ' . $pesoProduto . '</p>';
                                echo '<p> Escala: ' . $escalaProduto . '</p>';
                                echo '<p> Marca: ' . $marcaProduto . '</p>';
                                ?>
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <form action="" method="post">
                                        <h2 class="form-text">
                                            Quantidade
                                        </h2>
                                        <input type="number" class="form-control" name="txtQuantidade" id="txtQuantidade" min="1" max="<?= $qtdeProduto ?>" value="1">
                                        <input type="number" hidden name="txtID" value="<?=$idProduto?>" id="txtID">
                                </div>
                            </div>
                            <div class="row">
                                <h2 class="form-text ms-3 mt-3">
                                    Quantidade disponivel: <span class="text-danger"><?= $qtdeProduto ?></span>
                                </h2>
                            </div>
                            <div class="row mt-4">
                                <!-- 
                                    Vai dar um POST que puxa a quantidade do input e o ID do produto no carrinho 
                                -->
                                <button class="btn btn-lg btn-success" formaction="carrinho.php">
                                    Comprar agora
                                </button>
                                <button class="btn btn-lg btn-success mt-3" formaction="carrinho2.php">
                                    Adicionar ao carrinho 
                                </button>
                                <!-- -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 mt-4">

        </div>
        <div class="col-sm-8 bg-white mt-4" style="border-radius: 15px;">
            <div class='col-sm-12 ms-3'>

                <?php
                $sql = $conn->query('select * from produto ORDER BY RAND() limit 5');

                $gambBorda = 0;

                foreach ($sql as $row) {
                    $gambBorda++;

                    //Tentativa de entrar no detalhes do produto ao clicar: em procedimento Aqui

                    if ($gambBorda == 1) {
                        //arredonda o inicio
                        echo "
                    <div class='row'>
                        <div class='col-sm-1'></div>
                        <div class='col-sm-2 mt-4 p-2 padrao' id='produto2'>
                            <a href='detalhes-produto.php?id=" . $row[0] . "'>
                                <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid w-100 produtop2' alt=''>
                            </a>
                        </div>";
                    } elseif ($gambBorda == 5) {
                        //arredonda o fim
                        echo "
                        <div class='col-sm-2 mt-4 p-2 padrao2' id='produto'>
                            <a href='detalhes-produto.php?id=" . $row[0] . "'>
                                <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid w-100 produtop2' alt=''>
                            </a>
                        </div>
                        <div class='col-sm-1'></div>
                    </div>";

                        $gambBorda = 0;
                    } else {
                        echo "
                <div class='col-sm-2 mt-4 p-2 corr' id='produto'>
                    <a href='detalhes-produto.php?id=" . $row[0] . "'>
                        <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid w-100 produtop2' alt=''>
                    </a>
                </div>
                ";
                    }
                }
                ?>

            </div>
        </div>
        <div class="col-sm-2 mt-4">

        </div>
    </div>
</body>

</html>