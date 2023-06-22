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
    include_once('../ConexaoPHP/conexao.php')
    ?>
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
                        <a href="" class="btn" style="background-color: #d7fb41; border-radius:10px; color:black;">Categorias</a>
                    </div>
                    <div class="col-sm-5 mt-2">
                        <input type="text" placeholder="Pesquisa..." class="form-control ms-2" style="border-radius: 25px;" name="txtPesquisa" id="txtPesquisa">
                    </div>
                    <div class="col-sm-2">
                        <p style="display: inline-block; color:white">
                            <a href="">
                                <img src="../../img/icone-loupe-gris.png" class="img-fluid ms-3 me-2" style="width: 33px; height:30px; text-decoration:none" alt="">
                            </a>
                            <?php
                            //echo

                            //INSERIR A IMAGEM DO USUARIO AQUI

                            //'
                            //<img src="../../img/usu/' . $idUsuario . '/' . $imgUsuario . '" class="img-fluid ms-5" style="width: 43px; height:40px" alt="">
                            //' . $nomeUsuario . '
                            //'
                            //
                            ?>
                            <img src="../../img/6522516.png" class="img-fluid ms-5" style="width: 43px; height:40px" alt="">
                            Usuário
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p style="display: inline-block; color:white">

                            <a href="">
                                <!-- 
                                LINK CARINHO AQUI
                            -->
                                <img src="../../img/Carinho.png" class="img-fluid me-3" style="width: 43px; height:40px" alt="">
                            </a>
                            <a style="text-decoration: none!important; color:white" href="">
                                <!-- 
                                LINK Histórico AQUI
                            -->
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
            <div class="col-sm-2" style="background-color: #783ebf; border-top-left-radius:30px; border-bottom-left-radius:30px">

            </div>
            <div class="col-sm-6" style="background-color: #783ebf;">
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
            <div class="col-sm-2" style="background-color: #783ebf; border-top-right-radius:30px; border-bottom-right-radius:30px">

            </div>
        </div>

        <div class="row">

        <!-- 
            Sombra NEON VERDE
        -->
            <div class="col-md-12 ms-3 ">
                <div class="col-sm-1">

                </div>
                <div class="col-md-2 mt-4 p-2" style="background-color: #783ebf; border-top-left-radius:30px; border-bottom-left-radius:30px">
                    <?php
                    //Pesquisar a imagem do produto e inserir aqui e nas próximas col
                    //echo '<img src="" class="img-fluid w-100" alt="">';
                    ?>
                    <img src="../../img/coringa.png" class="img-fluid w-100" style="border-radius: 25px;" alt="">
                </div>
                <div class="col-md-2 mt-4 p-2" style="background-color: #783ebf;">
                    <img src="../../img/riven.webp" class="img-fluid w-100" style="border-radius: 25px;" alt="">
                </div>
                <div class="col-md-2 mt-4 p-2" style="background-color: #783ebf;">
                    <img src="../../img/ace.webp" class="img-fluid w-100" style="border-radius: 25px;" alt="">
                </div>
                <div class="col-md-2 mt-4 p-2" style="background-color: #783ebf;">
                    <img src="../../img/aranha.webp" class="img-fluid w-100" style="border-radius: 25px;" alt="">
                </div>
                <div class="col-md-2 mt-4 p-2" style="background-color: #783ebf; border-top-right-radius:30px; border-bottom-right-radius:30px">
                    <img src="../../img/capitao.png" class="img-fluid w-100" style="border-radius: 25px;" alt="">
                </div>
                <div class="col-sm-1">

                </div>
            </div>
        </div>
</body>

</html>