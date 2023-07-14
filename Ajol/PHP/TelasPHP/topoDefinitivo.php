
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<title>Bootstrap Example</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<style>


    .notificacao{
        font-size: 17px;
        font-weight: bold;
        color: red;
        z-index: 1;
        border: 10px;
        border-radius: 25px;
        border-color: black;
        text-decoration: none;
    }

</style>

<!-- TOPO -->
<form action="" method="post" enctype="multipart/form-data" style="background-color: darkgray;">
    <div class="col-md-12 bg-gradient" style="background-color: #783ebf;">
        <div class="row mt-3">
            <div class="col-sm-1">
                <a href="loja.php">
                    <img src="../../../resto/Logo-prototipo.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-sm-1 mt-4">
                <!-- 
                        INSERIR UM HOVER QUE MOSTRA AS CATEGORIAS
                        OU
                        AO CLICAR MOSTRAR TODAS AS CATEGORIAS EM UMA TELA SEPARADA
                    -->
                <div class="dropdown-center ms-4 mt-1">
                    <button class="btn btn-secondary dropdown-toggle btn-lg" style="background-color:#d7fb41;color:black" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </button>
                    <ul class="dropdown-menu" style="background-color:#d7fb41">
                        <?php
                        include_once('../ConexaoPHP/conexao.php');
                        $sql = $conn->query('select * from categoria');

                        //Ele vai pesquisar a categoria

                        if ($sql->rowCount() >= 1) {
                            foreach ($sql as $row) {
                                //Para cada categoria encontrada, ele vai criar um item no menu e um link personalizado para cada categoria
                                $nomeCategoria = $row[1];
                                echo
                                '<li>
                                    <a class="dropdown-item" href="detalhes-categoria.php?' . $row[0] . '">' . $nomeCategoria . '</a>
                                </li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5 mt-4">
                <input type="text" placeholder="Pesquisa..." class="form-control ms-2" style="border-radius: 25px;" name="txtPesquisa" id="txtPesquisa">
            </div>
            <div class="col-sm-2 mt-1">
                <p style="display: inline-block; color:white">
                    <a href="">
                        <img src="../../img/icone-loupe-gris.png" class="img-fluid mb-2 me-2 " style="width: 33px; height:30px; text-decoration:none" alt="">
                    </a>
                    <button class="btn bg-transparent" style="width: 200px;" formaction="Detalheusuario.php">
                        <img src="../../img/usu/<?= $idusuariologin?>/<?= $imgusuariologin ?>"  class="img-fluid ms-5 w-25 mt-3 border border-dark" style="border-radius:120px" alt="">
                        <b class="ms-2"><?= $nomeusuariologin?></b>
                    </button>
                </p>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="col-sm-12">
                    <p style="display: inline-block; color:white">
                        <div class="col-sm-3">
                        <a href="carrinho.php" style="text-decoration: none;">
                            <img src="../../img/Carinho.png" class="img-fluid me-3" style="width: 43px; height:40px;" alt="">
                        </a>
                    </div>
                        <div class="col-sm-1 border border-1 p-1 text-center me-3" style="border-radius: 90px;">
                            <span class="notificacao"><?=$cont?></span>
                        </div>
                        <a style="text-decoration: none!important; color:white" href="historico.php">
                            <img src="../../img/Historico.png" class="img-fluid ms-5" style="width: 43px; height:40px" alt="">
                            Histórico
                        </a>
                        <a style="text-decoration: none!important; color:white" href="../ConexaoPHP/logoff.php">
                            <img src="../../img/Sair.png" class="img-fluid ms-5" style="width: 43px; height:40px" alt="">
                            Sair
                        </a>


                    </p>
                </div>
            </div>
        </div>
    </div>
</form>