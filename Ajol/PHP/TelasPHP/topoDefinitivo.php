<div class="row">
    <!-- TOPO -->
    <div class="col-md-12 bg-gradient" style="background-color: #783ebf;">
        <div class="row mt-3">
            <div class="col-sm-1">
                <a href="loja.php">
                    <img src="../../../resto/Logo-prototipo.png" class="img-fluid" alt="">
                </a>
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
                    <img src="../../img/usu/<?= $idusuariologin ?>/<?= $imgusuariologin ?>" class="img-fluid ms-5 w-25 border border-dark" style="border-radius:120px" alt="">
                    <b>
                        <?= $nomeusuariologin ?>
                    </b>
                </p>
            </div>
            <div class="col-sm-3 mt-2">
                <p style="display: inline-block; color:white">

                    <a href="carrinho.php">
                        <!-- 
                            LINK CARINHO AQUI
                        -->
                        <img src="../../img/Carinho.png" class="img-fluid me-3" style="width: 43px; height:40px" alt="">
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