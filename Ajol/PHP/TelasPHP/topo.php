
<?php include_once('../ConexaoPHP/loginautenticar.php') ?>
    <div class="row p-3" style="background-color:#783ebf;">
        <div class="col-sm-1 me-2">
            <a href="loja.php">
                <img src="../../../resto/Logo-prototipo.png" class="w-100 img-fluid ms-4 p-1" alt="">
            </a>
        </div>
        <div class="col-sm-1 ms-3 mt-3">
            <a href="sistema.php?tela=usuario" class="btn bg-gradient butao" style="background-color:#d7fb41; text-decoration:none;">
                Gerenciador de Usuário
            </a>
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 mt-3">
            <a href="sistema.php?tela=produto" class="btn bg-gradient butao" style="background-color:#d7fb41; text-decoration:none;">
                Gerenciador de Produto
            </a>    
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 me-2 mt-3">
            <a href="sistema.php?tela=categoria" class="btn bg-gradient butao" style="background-color:#d7fb41; text-decoration:none;">
                Gerenciador de Categoria
            </a>
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 me-2 mt-3">
            <a href="sistema.php?tela=funcionario" class="btn bg-gradient butao" style="background-color:#d7fb41; text-decoration:none;">
                Gerenciador de Funcionário
            </a>
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-2 ms-4 mt-2">
            <img src="../../img/usu/<?=$idusuariologin ?>/<?=$imgusuariologin?>" class="img-fluid ms-5 w-25 border border-dark"  style="border-radius: 25px;" alt="">
            <b><?=$nomeusuariologin?></b>
        </div>
    </div>
