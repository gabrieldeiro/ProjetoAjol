<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <!---->
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
    <!---->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <!---->
    <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <title>Document</title>

</head>

<body>
<?php 
    include_once('../ConexaoPHP/conexao.php');
    include_once('../ConexaoPHP/loginautenticar.php'); 
    include_once('../ConexaoPHP/usuario_pesquisa2.php');

?>    
<?php include_once('topoDefinitivo.php') ?>
    <form action="" method="post" style="background-color: darkgray;" enctype="multipart/form-data">

         <h1 class="text-center"> Usuario </h1>

        <center>
            <div class="card border border-danger" style="width: 325px; height: 204px;">
                <img src="../../img/usu/<?= $idUsuario ?>/<?= $imgUsuario ?>" class="w-100 img-fluid" alt="">

            </div>
            <div class="card-body">
                <input type="file" class="btn btn-primary " name="txtImg">
            </div>
        </center>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Usuario:</div>
                <div class="col-sm-9"><input type="email" class="form-control form-control-lg" id="colFormLabelLg" value="<?= $nomeUsuario ?>" placeholder="Usuario"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">CPF:</div>
                <div class="col-sm-9"><input type="email" class="form-control form-control-lg" id="colFormLabelLg" value="<?= $cpfUsuario ?>" placeholder="CPF"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Login:</div>
                <div class="col-sm-9"><input type="email" class="form-control form-control-lg" value="<?= $loginUsuario ?>" id="colFormLabelLg" placeholder="Login"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Senha:</div>
                <div class="col-sm-9"><input type="email" value="<?= $senhaUsuario ?>" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Senha"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Email:</div>
                <div class="col-sm-9"><input type="email" value="<?= $emailUsuario ?>" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Email"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>


        <hr>
        <hr>
        <h1 class="text-center"> Endereço </h1>

        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Endereço:</div>
                <div class="col-sm-9"><input type="text" value="<?= $enderecoUsuario ?>" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Endereço"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Numero:</div>
                <div class="col-sm-9"><input type="text" value="<?= $numeroUsuario ?>" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Numero"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>

        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Bairro:</div>
                <div class="col-sm-9"><input type="text" value="<?= $bairroUsuario ?>" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Bairro"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">CEP:</div>
                <div class="col-sm-9"><input type="text" value="<?= $cepUsuario ?>" class="form-control form-control-lg" id="colFormLabelLg" placeholder="CEP"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Estado:</div>
                <div class="col-sm-9"><input type="email" value="<?= $enderecoUsuario ?>" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Estado"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Cidade:</div>
                <div class="col-sm-9"><input type="email" value="<?= $cidadeUsuario ?>" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Cidade"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <Center style="margin-top: 20px;">
            <button id="btnalterar" name="btnalterar" class="btn btn-warning btn-lg" formaction="../ConexaoPHP/usuario_alterar.php">Alterar</button>
        </Center>
    </form>

</body>

</html>