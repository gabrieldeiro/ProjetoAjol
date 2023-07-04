<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
    include_once('../ConexaoPHP/conexao.php');
    ?>
    <?php 
        $sql = $conn->query('select * from produto where id_produto='.$_GET['id']);
        if($sql->rowCount()>=1)
        {
            foreach ($sql as $row) 
            {
                $nome=$row[2];
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
</head>
<body>
    <div class="container-fluid" style="background-color: #404040;">
        <!-- Pegar ID -->
        <?php
        include_once('../ConexaoPHP/loginautenticar.php');
        include_once('topoDefinitivo.php');
        ?>
        <input type="text" hidden name="txtIdtemp" id="txtIdtemp" value="<?=$_GET['id']?>">
        <div class="row mt-5">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8 bg-white rounded-2">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <?php
                        $sql = $conn->query('select * from produto where id_produto='.$_GET['id']);

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
                        }
                        ?>
                        <img src="<?=$imgProduto?>" class="w-100 img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-2">

            </div>
        </div>
    </div>
</body>