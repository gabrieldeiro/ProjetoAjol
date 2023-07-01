<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <style>
        #produto
        {
            transition: 0.3s;
        }
        #produto:hover
        {
            box-shadow: 10px 5px 0px #84A400!important;
        }
        #produto2
        {
            transition: 0.3s;
        }
        #produto2:hover
        {
            box-shadow: -10px 5px 0px #84A400!important;
        }
        #icone
        {
            transition: 0.5s;
        }
        #icone:hover
        {
            box-shadow: 0px 5px 10px #84A400!important;
        }
        
        .perfil{
            border-radius: 25px;
        }

        .produtop2{
            background-color: #783ebf;
            border-radius: 30px;
        }
        .corr{
            background-color: #783ebf;
        }

    </style>
</head>

<body>
    <div class="container-fluid" style="background-color: #404040;">
        <div class="row">
            <!-- TOPO -->
            <div class="col-md-12 bg-gradient" style="background-color: #783ebf;">
                <div class="row mt-3">
                    <div class="col-sm-1">
                        <img src="../../../resto/Logo-prototipo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-1 mt-2">
                        <!-- 
                            INSERIR UM HOVER QUE MOSTRA AS CATEGORIAS
                            OU
                            AO CLICAR MOSTRAR TODAS AS CATEGORIAS EM UMA TELA SEPARADA
                        -->
                        <a href="sistema.php" class="btn" style="background-color: #d7fb41; border-radius:10px; color:black;">Categorias</a>
                    </div>
                    <div class="col-sm-5 mt-2">
                        <input type="text" placeholder="Pesquisa..." class="form-control ms-2" style="border-radius: 25px;" name="txtPesquisa" id="txtPesquisa">
                    </div>
                    <div class="col-sm-2 mt-2">
                        <p style="display: inline-block; color:white">
                            <a href="">
                                <img src="../../img/icone-loupe-gris.png" class="img-fluid ms-3 me-2 " style="width: 33px; height:30px; text-decoration:none" alt="">
                            </a> 
                            <img src="../../img/usu/<?=$idusuariologin ?>/<?=$imgusuariologin?>" class="img-fluid ms-5 w-25 border border-dark"  style="border-radius:120px" alt="">
                            <b>
                                <?=$nomeusuariologin?>
                            </b>

                        </p>
                    </div>
                    <div class="col-sm-3 mt-2">
                        <p style="display: inline-block; color:white">

                            <a href="carrinho.php">
                                <!-- 
                                LINK CARINHO AQUI
                            -->
                                <img src="../../img/Carinho.png"  class="img-fluid me-3" style="width: 43px; height:40px" alt="">
                            </a>
                            <a style="text-decoration: none!important; color:white" href="historico.php">
                                <img src="../../img/Historico.png" class="img-fluid ms-5" style="width: 43px; height:40px" alt="">
                                Histórico
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- CAROSSEL -->
        <div class="row mt-4">
            <div class="col-sm-1">

            </div>
            <div class="col-sm-2 bg-gradient" style="background-color: #783ebf; border-top-left-radius:30px; border-bottom-left-radius:30px">

            </div>
            <div class="col-lg-6 bg-gradient" style="background-color: #783ebf;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->

                    <div class="carousel-inner justify-content-center">
                        <div class="item active">
                            <img src="../../img/figuraLuffy.png" class="w-100 img-fluid" style="border-radius: 25px;">
                        </div>
                        <div class="item">
                            <img src="../../img/figuraNoku.png" class="w-100 img-fluid" style="border-radius: 25px;">
                        </div>
                        <div class="item">
                            <img src="../../img/figuraSerra.png" class="w-100 img-fluid" style="border-radius: 25px;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-2 bg-gradient" style="background-color: #783ebf; border-top-right-radius:30px; border-bottom-right-radius:30px">

            </div>
        </div>

        <style>
            .padrao{
                background-color: #783ebf; 
                border-top-left-radius:30px; 
                border-bottom-left-radius:30px;
            }
            .padrao2{
                background-color: #783ebf; 
                border-top-right-radius:30px; 
                border-bottom-right-radius:30px;
            }
        </style>

        <div class="row mt-5">
            <div class='col-sm-12 ms-3'>
                
                <?php
                    $sql = $conn->query('select * from produto');

                    $gambBorda = 0;

                    foreach ($sql as $row)
                    {
                        $gambBorda++;
                        
                        if($gambBorda == 1)
                        {
                            //arredonda o inicio
                            echo "
                            <div class='row'>
                                <div class='col-sm-1'></div>
                                <div class='col-sm-2 mt-4 p-2 padrao' id='produto2'>
                                    <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid w-100 produtop2' alt=''>
                                </div>";
                        }
                        elseif($gambBorda == 5)
                        {
                            //arredonda o fim
                            echo "
                            
                                <div class='col-sm-2 mt-4 p-2 padrao2' id='produto'>
                                    <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid w-100 produtop2' alt=''>
                                </div>
                                <div class='col-sm-1'></div>
                            </div>";

                            $gambBorda = 0;
                        }
                        else
                        {
                        echo "
                            <div class='col-sm-2 mt-4 p-2 corr' id='produto'>
                                <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid w-100 produtop2' alt=''>
                           </div>
                        ";
                        }

                       
                    }
                ?>

            </div>
        </div>
        

        <div class="row mt-5 ms-3">
            <div class="col-sm-1">

            </div>

            <div class="col-sm-5 p-5" id="produto2" style="background-color: #783ebf;  border-top-left-radius:30px; border-bottom-left-radius:30px;">
                <a href="">
                    <!-- 
                        LINK PARA A CATEGORIA CORRESPONDENTE
                    -->
                    <img src="../../img/Action Figures Anime.png" alt="" class="img-fluid w-100" style="border-radius: 25px;">
                </a>
            </div>

            <div class="col-sm-5 p-5" id="produto" style="background-color: #783ebf;  border-top-right-radius:30px; border-bottom-right-radius:30px">
                <a href="">
                    <!-- 
                        LINK PARA A CATEGORIA CORRESPONDENTE
                    -->
                    <img src="../../img/Action Figures Super.png" alt="" class="img-fluid w-100" style="border-radius: 25px;">
                </a>
            </div>

            <div class="col-sm-1">

            </div>
        </div>

        <p><?=$idusuariologin?></p>
</body>

</html>