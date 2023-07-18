<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once('../ConexaoPHP/conexao.php');
    ?>
    <title>
        <?php
        $sql = $conn->query('select * from categoria where id_categoria=' . $_GET['id']);
        if ($sql->rowCount() >= 1) {
            foreach ($sql as $row) {
                $idCategoria = $row[0];
                $nomeCategoria = $row[1];
                $descricaoCategoria = $row[2];
                $obsCategoria = $row[3];
                $statusCategoria = $row[4];
            }
        }
        echo $nomeCategoria;
        ?>
    </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../../../resto/icone.png" type="image/x-icon">

</head>

<body>

    <style>
        .padrao {
            background-color: #783ebf;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .padrao2 {
            background-color: #783ebf;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
<<<<<<< HEAD

        .imgpp{
                width: 350px;
                height: 350px;
                object-fit: cover;
                object-position: 50% 0%;
            }
=======
        body
        {
            background-color: #404040;
        }
>>>>>>> 45110c77de699fb060921be3d7f103c7f7ce5410
    </style>
    <?php
    include_once('../ConexaoPHP/loginautenticar.php');
    include_once('topoDefinitivo.php');
    ?>
    <div class="container-fluid" style="background-color: #404040;">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8 bg-white mt-5" style="border-radius: 20px;">
            <div class="col-sm-12">
                <?php
                $sql = $conn->query('select * from produto where id_categoria_produto=' . $_GET['id'] . ' ORDER BY RAND() ');

                $gambBorda = 0;


                foreach ($sql as $row2) 
                {
                    $gambBorda++;

                    //Tentativa de entrar no detalhes do produto ao clicar: em procedimento aqui

                    if ($gambBorda == 1) {
                        //arredonda o inicio
                        echo "
                    <div class='row'>
                        <div class='col-sm-1'></div>
                        <div class='col-sm-2 mt-4 p-2 padrao' id='produto2' style='background-color:#783ebf'>
                            <h3 style='color:black; background-color:#d7fb41; border-radius:10px' class='p-2' >$row2[2]</h3>
                            <a href='detalhes-produto.php?id=" . $row2[0] . "'>
                                <img src='../../img/prod/$row2[0]/$row2[13]' class='img-fluid  w-100 produtop2'class='imgpp'  style='border-radius: 20px; max-height: 300px; min-height:200px' alt=''>
                            </a>
                        </div>";
                    } elseif ($gambBorda == 5) {
                        //arredonda o fim
                        echo "
                        <div class='col-sm-2 mt-4 p-2 padrao2' id='produto' style='background-color:#783ebf'>
                            <h3 style='color:black; background-color:#d7fb41; border-radius:10px' class='p-2' >$row2[2]</h3>
                            <a href='detalhes-produto.php?id=" . $row2[0] . "'>
                                <img src='../../img/prod/$row2[0]/$row2[13]' class='img-fluid  w-100 produtop2' class='imgpp' style='border-radius: 20px; max-height: 300px; min-height:200px' alt=''>
                            </a>
                        </div>
                        <div class='col-sm-1'></div>
                    </div>";

                        $gambBorda = 0;
                    } else {
                        echo "
                <div class='col-sm-2 mt-4 p-2 corr' id='produto' style='background-color:#783ebf'>
                        <h3 style='color:black; background-color:#d7fb41; border-radius:10px' class='p-2' >$row2[2]</h3>
                    <a href='detalhes-produto.php?id=" . $row2[0] . "'>
                        <img src='../../img/prod/$row2[0]/$row2[13]' class='img-fluid  w-100 produtop2'class='imgpp'  style='border-radius: 20px; max-height: 300px; min-height:200px' alt=''>
                    </a>
                </div>
                ";
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-sm-2">

        </div>
    </div>
</body>

</html>