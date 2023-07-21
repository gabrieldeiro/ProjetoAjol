<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="shortcut icon" href="../../../resto/icone.png" type="image/x-icon">

<style>
    .notificacao {
        display: block;
        text-align: center;
        width: 25px;
        height: 25px;
        font-size: 17px;
        font-weight: bold;
        color: red;
        z-index: 1;
        text-decoration: none;
        position: absolute;
        top: -10px;
        right: 295px;
        background-color: white;
        border-radius: 50%;
    }
    .BUTTON SPAN 
    {
    line-height: 14px;
    font-size: 14px;
    padding: 4px;
    display: inline-block;
    vertical-align: middle;
    text-align: center;    
    }

    .perfil{
        width: 70px;
        height: 50px;
        object-fit: cover;
        object-position: 50% 0%;
    }
</style>
<?php 

    include_once('../conexaoPHP/conexao.php');

    //Frescurinhas de aniversário
    $sqlAniversario = $conn->query('select data_nasc_usuario from usuario where id_usuario='.$idusuariologin);
    $dataAtual = 0;
    $dataNiver = 0;

    foreach ($sqlAniversario as $row) 
    {
        $dataAniversario = $row[0];
    }
    if ($sqlAniversario->rowCount()==1) 
    {
        date_default_timezone_set('America/Sao_Paulo');

        $dataNiver = new DateTime($dataAniversario);
        $dataAtual = new DateTime();

        $diaNiver = $dataNiver->format('d');
        $mesNiver = $dataNiver->format('m');

        $diaAtual = $dataAtual->format('d');
        $mesAtual = $dataAtual->format('m');

        if ($mesAtual == $mesNiver and $diaAtual == $diaNiver) 
        {
            $corFrufu = true;
        }
        else 
        {
            $corFrufu = false;
        }
    }

?>

<!-- TOPO -->
<form action="" method="post" class="bg-gradient" enctype="multipart/form-data" style="background-color: #783ebf;">
    <div class="col-md-12 bg-gradient" style="background-color: #783ebf;">
        <div class="row mt-3">
            <div class="col-sm-1">
            
            <!--
                Verificação de dia de aniversário

                //echo 'Dia Aniversário: ';echo $diaNiver;echo '<br>Dia Atual: '; echo $diaAtual;echo'<br>Mês Atual: '; echo$mesAtual;echo '<br>Mês Aniversário: ';echo$mesNiver 
            -->
            
                <a href="loja.php?pag=">
                    <img src="../../../resto/icone.png" class="img-fluid w-75 p-3 mb-3 bg-dark" style="border-radius:20px" alt="">
                </a>
            </div>
            <div class="col-sm-1 mt-4">
                <!-- 
                        INSERIR UM HOVER QUE MOSTRA AS CATEGORIAS
                        OU
                        AO CLICAR MOSTRAR TODAS AS CATEGORIAS EM UMA TELA SEPARADA
                    -->
                <div class="dropdown-center ms-4 mt-2">
                    <button <?= ($corFrufu ? 'class="btn-dark btn dropdown-toggle btn-lg"' : 'class="btn btn-secondary dropdown-toggle btn-lg" style="background-color:#d7fb41;color:black"')?> type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span <?= ($corFrufu ? 'class="css-rainbow-text"' : 'class=""')?>>Categorias</span>
                    </button>
                    <ul class="dropdown-menu me-3" style="background-color:#d7fb41">
                        <?php
                        include_once('../ConexaoPHP/conexao.php');
                        $sql = $conn->query('select * from categoria');

                        //Ele vai pesquisar a categoria

                        if ($sql->rowCount() >= 1) 
                        {
                            foreach ($sql as $row) 
                            {
                                //Para cada categoria encontrada, ele vai criar um item no menu e um link personalizado para cada categoria
                                $idCategoria = $row[0];
                                $nomeCategoria = $row[1];
                                echo 
                                ($corFrufu ? 
                                "<li class='css-rainbow-text'>
                                    <a class='dropdown-item' href='detalhes-categoria.php?id=' . $idCategoria . ''>' . $nomeCategoria . '</a>
                                </li>" 
                                : 
                                "<li>
                                    <a class='dropdown-item' href='detalhes-categoria.php?id=$idCategoria'> $nomeCategoria'</a>
                                </li>"
                        );
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5 mt-4">
                <input type="text" placeholder="Pesquisa..." class="form-control ms-2 mt-1" style="border-radius: 25px;" name="txtPesquisa" id="txtPesquisa">
            </div>
            <div class="col-sm-2 mt-2">
                <p style="display: inline-block; color:white">
                    <a href="" style="text-decoration: none;">
                        <img src="../../img/icone-loupe-gris.png" class="img-fluid mb-2 me-2 " style="width: 33px; height:30px; text-decoration:none" alt="">
                    </a>
                    <!-- 
                        Antiga Imagem e nome de Usuário

                        <img src="../../img/usu/< ?= $idusuariologin ?>/< ?= $imgusuariologin ?>" class="img-fluid ms-5 w-25 mt-3 border border-dark" style="border-radius:120px" alt="">
                        <b class="ms-2">< ?= $nomeusuariologin ?></b>

                    -->
                    <button <?php $teste = ''; if($idusuariologin == ''){$teste = 'hidden';}else{$teste='';}?> <?=$teste?> class="btn w-50" formaction="Detalheusuario.php">
                        <span>
                            <img src="../../img/usu/<?=$idusuariologin?>/<?=$imgusuariologin?>" <?=$teste?> class="img-fluid ms-5 mt-2 border border-dark w-50" style="border-radius:120px">
                        </span>
                        <?=$nomeusuariologin?>
                    </button>
                </p>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="col-sm-12">
                    <p style="display: inline-block; color:white">
                        <a href="carrinho.php" style="text-decoration: none;">
                            <img src="../../img/Carinho.png" class="img-fluid me-3" style="width: 43px; height:40px;" alt="">
                        </a>
                        <span <?php $teste2 = ''; if($cont == ''){$teste2 = 'hidden';}else{$teste2='';}?> <?=$teste2?> class="notificacao"><?= $cont ?></span>
                    <a style="text-decoration: none!important; color:white" href="historico.php">
                        <img src="../../img/Historico.png" class="img-fluid ms-5" style="width: 43px; height:40px" alt="">
                        Histórico
                    </a>
                    <a <?php $teste2 = ''; if($idusuariologin == ''){$teste2 = 'Logar';}else{$teste2='Sair';}?> style="text-decoration: none!important; color:white" href="../ConexaoPHP/logoff.php">
                        <img src="../../img/Sair.png" class="img-fluid ms-5" style="width: 43px; height:40px" alt="">
                        <?=$teste2?>
                    </a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>

<script>


</script>