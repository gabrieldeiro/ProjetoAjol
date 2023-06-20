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
    <link rel="stylesheet" href="style.css">
    <?php
    include_once('../ConexaoPHP/conexao.php')
    ?>
</head>

<body>
    <div class="container" style="background-color: #404040;">
        <div class="row">
            <?
            //TOPO 
            ?>
            <div class="col-md-12 bg-gradient" style="background-color: #783ebf;">
                <div class="row mt-3">
                    <div class="col-sm-1">
                        <img src="../../../resto/Logo-prototipo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-1">
                        <a href="" class="btn" style="background-color: #d7fb41; border-radius:10px; color:white;">Categorias</a>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" placeholder="Pesquisa..." class="form-control ms-4" style="border-radius: 25px;" name="txtPesquisa" id="txtPesquisa">
                    </div>
                    <div class="col-sm-2">
                        <p style="display: inline-block; color:white">
                            <a href="">
                                <img src="../../img/icone-loupe-gris.png" class="img-fluid ms-3 me-2" style="width: 33px; height:30px" alt="">
                            </a>
                            <img src="../../img/6522516.png" class="img-fluid ms-3" style="width: 43px; height:40px" alt="">
                            Usuário
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p style="display: inline-block; color:white">
                            <img src="../../img/Carinho.png" class="img-fluid me-4" style="width: 43px; height:40px" alt="">
                            <img src="../../img/Historico.png" class="img-fluid ms-5" style="width: 43px; height:40px" alt="">
                            Histórico
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?
        //Carrosel 
        ?>
        <div class="row mt-2">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-7" style="background-color: #783ebf;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->

                    <!-- CENTRALIZAR AQUIIIIIIIIIIII -->

                    <div class="carousel-inner justify-content-center">
                        <div class="item active">
                            <img src="../../img/figuraLuffy.png" class="w-75 img-fluid">
                        </div>
                        <div class="item">
                            <img src="../../img/figuraNoku.png" class="w-75 img-fluid">
                        </div>
                        <div class="item">
                            <img src="../../img/figuraSerra.png" class="w-75 img-fluid">
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
                <div class="col-sm-2">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-1">

                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-2">

                </div>
                <div class="col-sm-1">

                </div>
            </div>
        </div>
</body>

</html>