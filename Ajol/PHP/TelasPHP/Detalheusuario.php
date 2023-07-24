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
                <div class="col-sm-9"><input type="text" name="txtNome" class="form-control form-control-lg" id="txtNome" value="<?= $nomeUsuario ?>" placeholder="Usuario"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">CPF:</div>
                <div class="col-sm-9"><input type="text" name="txtCpf" class="form-control form-control-lg" id="txtCpf" value="<?= $cpfUsuario ?>" placeholder="CPF"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Login:</div>
                <div class="col-sm-9"><input type="text" name="txtLogin" class="form-control form-control-lg" value="<?= $loginUsuario ?>" id="txtLogin" placeholder="Login"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Senha:</div>
                <div class="col-sm-9"><input type="txtSenha" name="txtSenha" value="<?= $senhaUsuario ?>" class="form-control form-control-lg" id="txtSenha" placeholder="Senha"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Email:</div>
                <div class="col-sm-9"><input type="email" name="txtEmail" value="<?= $emailUsuario ?>" class="form-control form-control-lg" id="txtEmail" placeholder="Email"></div>
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
                <div class="col-sm-9"><input type="text" name="txtEndereco" value="<?= $enderecoUsuario ?>" class="form-control form-control-lg" id="txtEndereco" placeholder="Endereço"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Numero:</div>
                <div class="col-sm-9"><input type="text" name="txtNumero" value="<?= $numeroUsuario ?>" class="form-control form-control-lg" id="txtNumero" placeholder="Numero"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>

        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Bairro:</div>
                <div class="col-sm-9"><input type="text" name="txtBairro" value="<?= $bairroUsuario ?>" class="form-control form-control-lg" id="txtBairro" placeholder="Bairro"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">CEP:</div>
                <div class="col-sm-9"><input type="text" name="txtCep" value="<?= $cepUsuario ?>" class="form-control form-control-lg" id="txtCep" placeholder="CEP"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Estado:</div>
                <div class="col-sm-9"><input type="text" name="txtEstado" value="<?= $enderecoUsuario ?>" class="form-control form-control-lg" id="txtEstado" placeholder="Estado"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <div class="col-sm-1 mt-2">Cidade:</div>
                <div class="col-sm-9"><input type="text" name="txtCidade" value="<?= $cidadeUsuario ?>" class="form-control form-control-lg" id="txtCidade" placeholder="Cidade"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
        <Center style="margin-top: 20px;">
        <button id="btnalterar" name="btnalterar" class="btn btn-warning btn-lg" formaction="../ConexaoPHP/usuario_alterar2.php">Alterar</button>
        </Center>
    </form>

</body>
</html>

<script>
    let formulario = document.getElementById("Detalheusuario.php");
    let Nome= document.getElementById("txtNome");
    let CPF= document.getElementById("txtCpf");
    let Login= document.getElementById("txtLogin");
    let Senha= document.getElementById("txtSenha");
    let Email= document.getElementById("txtEmail");
    let Endereço= document.getElementById("txtEndereco");
    let Numero= document.getElementById("txtNumero");
    let Bairro= document.getElementById("txtBairro");
    let CEP= document.getElementById("txtCep");
    let Estado= document.getElementById("txtEstado");
    let Cidade= document.getElementById("txtCidade");
    
    function Alterar()
    {
        
        if(Nome.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Nome.focus();
            return;
        }
        if(CPF.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            CPF.focus();
            return;
        }
        if(Login.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Login.focus();
            return;
        }
        if(Senha.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Senha.focus();
            return;
        }
        if(Email.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Email.focus();
            return;
        }
        if(Endereço.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Endereço.focus();
            return;
        }
        if(Numero.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Numero.focus();
            return;
        }
        if(Bairro.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Bairro.focus();
            return;
        }
        if(CEP.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            CEP.focus();
            return;
        }
        if(Estado.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Estado.focus();
            return;
        }
        if(Cidade.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            Cidade.focus();
            return;
        }

        formulario.action = "sistema.php?tela=funcionario";
        formulario.submit();

    }
</script>
<Script>

        (function(){
    
    const cep = document.querySelector("input[name=txtCep]");
    
    cep.addEventListener('blur', e=> {
          const value = cep.value.replace(/[^0-9]+/, '');
      const url = `https://viacep.com.br/ws/${value}/json/`;
      
      fetch(url)
      .then( response => response.json())
      .then( json => {
              
          if( json.logradouro ) {
              document.querySelector('input[name=txtEndereco]').value = json.logradouro;
            document.querySelector('input[name=txtBairro]').value = json.bairro;
            document.querySelector('input[name=txtCidade]').value = json.localidade;
            document.querySelector('input[name=txtEstado]').value = json.uf;
          }
      
      });
      
      
    });
    
    
    })();
    

</Script>