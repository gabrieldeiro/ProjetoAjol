<!DOCTYPE html>
<html lang="pt-br">
<link rel="shortcut icon" href="../../../resto/icone.png" type="image/x-icon">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../../resto/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">

    <?php
    include_once('../ConexaoPHP/conexao.php');
    include_once('../ConexaoPHP/loginautenticar.php');

    ?>
    <style>
    #produto {
        transition: 0.3s;
    }

    #produto:hover {
        box-shadow: 10px 5px 0px #84A400 !important;
    }

    #produto2 {
        transition: 0.3s;
    }

    #produto2:hover {
        box-shadow: -10px 5px 0px #84A400 !important;
    }

    #icone {
        transition: 0.5s;
    }

    #icone:hover {
        box-shadow: 0px 5px 10px #84A400 !important;
    }

    .perfil {
        border-radius: 25px;
    }

    .produtop2 {
        background-color: #783ebf;
        border-radius: 30px;
    }

    .corr {
        background-color: #783ebf;
        border: none;
    }

    body {
        background-color: #404040;
    }
    </style>
</head>

<body>
    <div class="container-fluid" style="background-color: #404040;">
        <div class="row">
            <!-- TOPO -->
            <?php include_once("topoDefinitivo.php") ?>
        </div>
        <!-- CAROSSEL -->
        <div class="row mt-4">
            <div class="col-sm-1">

            </div>
            <div class="col-sm-2 bg-gradient"
                style="background-color: #783ebf; border-top-left-radius:30px; border-bottom-left-radius:30px">

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
            <div class="col-sm-2 bg-gradient"
                style="background-color: #783ebf; border-top-right-radius:30px; border-bottom-right-radius:30px">

            </div>
        </div>

        <style>
        .padrao {
            background-color: #783ebf;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .padrao2 {
            background-color: #783ebf;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        .imgpp {
            width: 350px;
            height: 350px;
            object-fit: cover;
            object-position: 50% 0%;
        }
        </style>

        <div class="row mt-5">
            <div class='col-sm-12 ms-3'>

                <?php

                    $pagina = $_GET['pag'];
                    $ini = '';

                    if(!$pagina)
                    {
                        $ini = 0;
                    }
                    else
                    {
                        $ini = $pagina;
                    }

                    $sql = $conn->query('select * from produto limit 16 offset'.' '.$ini);

                    $gambBorda = 0;
                    $contmast = 0;
                    $limit = '';

                    foreach ($sql as $row) {
                        $gambBorda++;
                        $contmast++;

                        if($contmast <= 10){

                            if ($gambBorda == 1) {
                                //arredonda o inicio
                                echo "
                                    <div class='row'>
                                        <div class='col-sm-1'></div>
                                        <div class='col-sm-2 mt-4 p-2 padrao' id='produto2'> 
                                            <a href='detalhes-produto.php?id=" . $row[0] . "'>
                                                <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid imgpp w-100 produtop2' alt=''>
                                            </a>
                                        </div>";
                            } elseif ($gambBorda == 5) {
                                //arredonda o fim
                                echo "
                                    
                                        <div class='col-sm-2 mt-4 p-2 padrao2' id='produto'> 
                                            <a href='detalhes-produto.php?id=" . $row[0] . "'>
                                                <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid imgpp w-100 produtop2' alt=''>  
                                            </a>
                                        </div>
                                        <div class='col-sm-1'></div> 
                                    </div>";

                                $gambBorda = 0;
                            
                            
                            }else {
                                echo "
                                    <div class='col-sm-2 mt-4 p-2 corr' id='produto'> 
                                        <a href='detalhes-produto.php?id=" . $row[0] . "'>
                                            <img src='../../img/prod/$row[0]/$row[13]' class='img-fluid imgpp produtop2' alt=''>  
                                        </a>
                                </div>
                                "; 
                            }

                        }
                        elseif($contmast == 11 && $limit !=123){

                            $limit = 123;

                            echo"
                            <div class='row mt-5 ms-3'>
                                <div class='col-sm-1'>
                
                                </div>
                    
                                <div class='col-sm-5 p-5' id='produto2' style='background-color: #783ebf;  border-top-left-radius:30px; border-bottom-left-radius:30px;'>
                                    <a href=''>
                                        <img src='../../img/Action Figures Anime.png' alt='' class='img-fluid w-100' style='border-radius: 25px;'>
                                    </a>
                                </div>
                    
                                <div class='col-sm-5 p-5' id='produto' style='background-color: #783ebf;  border-top-right-radius:30px; border-bottom-right-radius:30px'>
                                    <a href=''>

                                        <img src='../../img/Action Figures Super.png' alt='' class='img-fluid w-100' style='border-radius: 25px;'> 
                                    </a>
                                </div>
                    
                                <div class='col-sm-1'>
                    
                                </div>
                            </div>   
                            ";

                            $contmast = 0;
                            $gambBorda = 0;
                        }
                        else
                        {
                            $contmast = 0;
                            $gambBorda = 0;
                        }
                    }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-11">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end pagination-lg">
                        <?php
                            $pags=1;
                            $sqlpro = $conn->query('select ceil(count(*) / 16) from produto');

                            foreach ($sqlpro as $row)
                            {
                                $pags = $row[0];


                            }

                            for ($i=0; $i < $pags; $i++) { 
                                $i1 = $i * 16;
                                $i2 = $i+1;
                                echo"<li class='page-item'><a class='page-link' href='loja.php?pag=$i1'>$i2</a></li>";
                            }

                        ?>
                    </ul>
                </nav>
            </div>
        </div>



    </div>
</body>

</html>