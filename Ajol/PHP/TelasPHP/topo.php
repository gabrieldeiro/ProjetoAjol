
<?php 

    include_once('../ConexaoPHP/loginautenticar.php');
    
    if($_GET['id'])
    {

        $id = $_GET['id'];

        $sql = $conn->query('select * from funcionario where id_funcionario='.$id);

        if($sql->rowCount()>=1)
        {
            foreach($sql as $row)
            {
                $nomefuncionario=$row[1];
                $imgusuariofuncionario=$row[14];
            }
        }
        else
        {
            echo '<p>Funcionario não existe</p>';
        }
    }

?>
    <div class="row p-3" style="background-color:#783ebf;">
        <div class="col-sm-1 me-2">
            <a href="loja.php?id=<?=$id?>">
                <img src="../../../resto/Logo-prototipo.png" class="w-100 img-fluid ms-4 p-1" alt="">
            </a>
        </div>
        <div class="col-sm-1 ms-3 mt-3">
            <a href="sistema.php?tela=usuario&id=<?=$id?>" class="btn bg-gradient butao" style="background-color:#d7fb41; text-decoration:none;">
                Gerenciador de Usuário
            </a>
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 mt-3">
            <a href="sistema.php?tela=produto&id=<?=$id?>" class="btn bg-gradient butao" style="background-color:#d7fb41; text-decoration:none;">
                Gerenciador de Produto
            </a>    
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 me-2 mt-3">
            <a href="sistema.php?tela=categoria&id=<?=$id?>" class="btn bg-gradient butao" style="background-color:#d7fb41; text-decoration:none;">
                Gerenciador de Categoria
            </a>
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 me-2 mt-3">
            <a href="sistema.php?tela=funcionario&id=<?=$id?>" class="btn bg-gradient butao" style="background-color:#d7fb41; text-decoration:none;">
                Gerenciador de Funcionário
            </a>
        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-2 ms-4 mt-2">
            <img src="../../img/fun/<?=$id?>/<?=$imgusuariofuncionario?>" class="img-fluid ms-5 w-25 border border-dark"  style="border-radius: 25px;" alt="">
            <b><?=$nomefuncionario?></b>

            <p></p>
        </div>
    </div>
