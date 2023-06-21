
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
   

</head>
<body>
    

<?php include_once('../ConexaoPHP/categoria_pesquisa.php') ?>
    <div class="container-fluid   mt-3">
        <div class="row mt-3">
            <div class="col-sm-12">
                <h1>Categoria</h1>
            </div>
        </div>

        <form action="" method="post"  class="form-control " style="background-color: darkgray;">
        <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control"  style="border-radius: 25px;" name="txtId"
                        placeholder="ID categoria" value="<?=$idCategoria?>">
                        <!-- este id esta no categoria pesquisa -->
                </div>

            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control"  style="border-radius: 25px;" name="txtNome"
                        placeholder="nome categoria"value="<?=$nomeCategoria?>">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" name="btopesquisar" id="btopesquisar"
                        formaction="frm_categoria.php">&#128269;</button> 
              
            </div>
           
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtDescricao"  placeholder="descricao categoria" value="<?=$descricaoCategoria?>">

                  </div>
            
            
                
                <div class="col-sm-4">
                    <select name="txtStatus" class="form-control">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo" <?= ($statusCategoria == 'ativo' ? 'selected' : "") ?>>Ativo</option>
                        <option value="inativo" <?= ($statusCategoria == 'inativo' ? 'selected' : "") ?>>Inativo</option>
                    </select>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea class="form-control" name="txtObs" id="txtObs" rows="5"
                        placeholder="Observação " ><?=$obsCategoria?></textarea>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar"  class="btn btn-success"formaction="../ConexaoPHP/categoria_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar"  class="btn btn-warning"formaction="../ConexaoPHP/categoria_alterar.php">Alterar</button>
                    <button name="btoLimpar" id="btoLimpar" class="btn btn-primary" >Limpar</button><a href="categoria_cadastrar.php"></a>
                    <button name="btoExcluir"  class="btn btn-danger"formaction="../ConexaoPHP/categoria_excluir.php">Excluir</button>
                   
                </div>
            </div>
        </form>
    </div>
     
</body>
</html> 