
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
    

<!-- <?php include_once('.php') ?>pesquisar -->
    <div class="container-fluid   mt-3">
        <div class="row mt-3">
            <div class="col-sm-12">
                <h1>Categoria</h1>
            </div>
        </div>

        <form action="" method="post"  class="form-control " style="background-color: darkgray;">
        <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control"  style="border-radius: 25px;" name="txtidcategoria"
                        placeholder="ID categoria">
                </div>

            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control"  style="border-radius: 25px;" name="txtnomecategoria"
                        placeholder="nome categoria">
                </div>
                <!-- <div class="col-sm-4">
                    <button class="btn btn-primary" name="btopesquisar" id="btopesquisar"
                        formaction="_sistema.php?tela=filme">&#128269;</button> -->
                <!-- </div> --> pesquisar
            </div>
           
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtdescricaocategoria"  placeholder="descricao categoria">

                  </div>
            
            
                
                <div class="col-sm-4">
                    <select name="txtstatuscategoria" class="form-control">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo" <?= ($status_categoria == 'ativo' ? 'selected' : "") ?>>Ativo</option>
                        <option value="inativo" <?= ($status_categoria == 'inativo' ? 'selected' : "") ?>>Inativo</option>
                    </select>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea class="form-control" name="txtobscategoria" id="txtobscategoria" rows="5"
                        placeholder="Observação "></textarea>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar"  class="btn btn-primary"formaction="categoria_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar"  class="btn btn-danger"formaction="categoria_alterar.php">Alterar</button>
                    <button <a href="categoria_cadastrar.php" name="btoLimpar" id="btoLimpar" class="btn btn-secundary">Limpar</button>
                    <button name="btoExcluir"  class="btn btn-warning" formaction="carrinho_excluir.php">Excluir</button>
                    <button name="btoExcluir"  class="btn btn-warning" formaction="frm_categoria.php">Sair</button>
                </div>
            </div>
        </form>
    </div>
   
</body>
</html>