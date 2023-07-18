<link rel="shortcut icon" href="../../../resto/icone.png" type="image/x-icon">

<?php include_once('../ConexaoPHP/categoria_pesquisa.php') ?>

    <form action="" method="post" id="frmcategoria" enctype="multipart/form-data" onsubmit="return false;" style="background-color:darkgray;">

           <div class="row mt-5">
                <div class="col-sm-6"> Nome da Categoria
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome" value="<?= $nomeCategoria ?>" >
                </div>
                <div class="col-sm-5"> Id da Categoria
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtId" id="txtId" value="<?= $idCategoria ?>">
                </div>
                <div class="col-sm-1 text-start"><br>
                    <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" 
                    formaction="sistema.php?tela=categoria"  onclick="Pesquisar()">&#128269;</button>
                </div>
           </div>

           <div class="row">
                <div class="col-sm-4 mt-3"> Status
                    <select name="txtStatus" id="txtStatus" class="form-control" style="border-radius: 25px;">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo" <?= ($statusCategoria == 'ativo' ? 'selected' : "") ?>>Ativo</option>
                        <option value="inativo" <?= ($statusCategoria == 'inativo' ? 'selected' : "") ?>>Inativo</option>
                    </select>
                </div>
           </div>
           
            <div class="row mt-3">
                <div class="col-sm-12"> Descrição Categoria
                <textarea class="form-control textarea1" name="txtDescricao" id="txtDescricao" rows="5"><?= $descricaoCategoria ?></textarea>
                </div>
           </div>
                           
            <div class="row mt-3">
                <div class="col-sm-12"> Observação
                    <textarea class="form-control textarea1" name="txtObs" id="txtObs" rows="5"><?= $obsCategoria ?></textarea>
                </div>
            </div>
        
                <div class="row mt-3">
                    <div class="col-sm-12 text-end">
                            <button name="btoCadastrar" class="btn btn-success" formaction="../ConexaoPHP/categoria_cadastrar.php" onclick="Cadastrar()">Cadastrar</button>
                        <button name="btoAlterar" class="btn btn-warning" formaction="../ConexaoPHP/categoria_alterar.php" onclick="Alterar()">Alterar</button>
                            <a href="sistema.php?tela=categoria" class="btn btn-primary" name="btoLimpar" id="btoLimpar" class="btn btn-secundary">Limpar</a>
                        <button name="btoExcluir" class="btn btn-danger" formaction="../ConexaoPHP/categoria_excluir.php"onclick="Excluir()" >Excluir</button>
                    </div>
                </div>
         </div>
    </form>

<script>
    let formulario = document.getElementById("frmcategoria");
    let id =document.getElementById("txtId");
    let Nome= document.getElementById("txtNome");
    let Status= document.getElementById("txtStatus");
    let Descricao= document.getElementById("txtDescricao");


    function Pesquisar()
    {
        
        if(id.value.trim() == "")
        {
            alert("Erro, o codigo deve ser preenchido");
            id.focus();
            return;
        }

        formulario.action = "sistema.php?tela=categoria";
        formulario.submit();

    }

    function Alterar()
    {
        
        if(id.value.trim() == "")
        {
            alert("Erro, o ID da Categoria deve ser preenchido");
            id.focus();
            return;
        }

        formulario.action = "../ConexaoPHP/categoria_alterar.php";
        formulario.submit();

    }

    function Excluir()
    {
        
        if(id.value.trim() == "")
        {
            alert("Erro, o ID da Categoria deve ser preenchido");
            id.focus();
            return;
        }

        formulario.action = "../ConexaoPHP/categoria_excluir.php";
        formulario.submit();

    }

    function Cadastrar()
    {
    
        if(Nome.value.trim() == "")
        {
            alert("Erro, o nome deve ser preenchido");
           id.focus();
           return;
            
        }
        
        if(Status.value.trim() == "")
        {
            alert("Erro, o Status deve ser preenchido");
           id.focus();
           return;
            
        }

        if(Descricao.value.trim() == "")
        {
            alert("Erro, o Descrição deve ser preenchido");
           id.focus();
           return;
            
        }

        formulario.action = "../ConexaoPHP/categoria_cadastrar.php";
        formulario.submit();

    }


</script>