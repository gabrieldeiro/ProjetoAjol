<?php include_once('../ConexaoPHP/funcionario_pesquisa.php') ?>
<style>
    .textarea1 {
        resize: none !important;
    }
</style>



<!-- os que estao no value estao na variavel de funcionario_pesquisa -->

<form action="" method="post"  id="frmfuncionario" style="background-color: darkgray;"  enctype="multipart/form-data" onsubmit="return false;">
                <center>
                    <div class="card border border-danger" style="width: 325px; height: 204px;">
                        <img src="../../img/usu/<?=$idUsuario?>/<?=$imgUsuario?>" class="w-100 img-fluid"  alt="">

                    </div>
                    <div class="card-body">
                        <input type="file" class="btn btn-primary " name="txtImg">
                    </div>
                </center>
            <hr>
    <div class="row mt-3 ">
        <div class="col-sm-6">Nome do Funcionario
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome" value="<?= $nomeFuncionario ?>">
        </div>
        <div class="col-sm-3"> Data de Nascimento
            <input type="date" class="form-control" style="border-radius: 25px;" name="txtNascimento" id="txtNascimento" value="<?= $datanascimentoFuncionario ?>">
        </div>
        <div class="col-sm-3">CPF
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtCpf" id="txtCpf" placeholder="Ex.: 000.000.000-00" value="<?= $cpfFuncionario ?>">
        </div>
              
    </div>

    <div class="row mt-3 ">
        <div class="col-sm-3">Email
            <input type="email" class="form-control" style="border-radius: 25px;" name="txtEmail" id="txtEmail" value="<?= $emailFuncionario ?>">
        </div>
        <div class="col-sm-3">Login
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtLogin" id="txtLogin" value="<?= $loginFuncionario ?>">
        </div>
        <div class="col-sm-3"> Senha
            <input type="password" class="form-control" style="border-radius: 25px;" name="txtSenha" id="txtSenha" value="<?= $senhaFuncionario ?>">
        </div>
        <div class="col-sm-2"> ID do Funcionario
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtId" id="txtId" value="<?= $idFuncionario ?>">
        </div>

        <div class="col-sm-1 text-start"><br>
            <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="sistema.php?tela=funcionario" onclick="Pesquisar()"> &#128269; </button>
        </div>   
        
    </div>
 <hr>
    <div class="row mt-3 ">
        <div class="col-sm-3">CEP
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtCep" id="txtCep" placeholder="Ex.: 00000-000" value="<?= $cepFuncionario ?>">
        </div>
        <div class="col-sm-5">Endereço
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtEndereco" id="txtEndereco" value="<?= $enderecoFuncionario ?>">
        </div>
        <div class="col-sm-2">Bairro
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtBairro" id="txtBairro" value="<?= $enderecoFuncionario ?>">
        </div>
        <div class="col-sm-2">Numero
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtNumero" id="txtNumero" value="<?= $numeroFuncionario ?>">
        </div>

    </div>

    <div class="row mt-3 ">
        <div class="col-sm-2">Cidade
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtCidade" id="txtCidade" value="<?=$cidadefuncionario?>">
        </div>
        <div class="col-sm-1">Estado/UF
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtEstado" id="txtEstado" value="<?=$estadofuncionario?>">
        </div>
        <div class="col-sm-9">Complemento
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtComplemento" id="txtComplemento" value="<?= $complementoFuncionario ?>"> 
        </div>  

    </div>
        
    <div class="row mt-3 ">
        <div class="col-sm-12"> Observação
            <textarea class="form-control textarea1" name="txtObs" id="txtObs" style="border-radius: 25px;" rows="1" value="<?= $obsProduto ?>"></textarea>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-4">Status
            <select name="txtStatus" id="txtStatus"  class="form-control" style="border-radius: 25px;">
                <option value="">--Selecione um Status--</option>
                <option value="ativo" <?= ($statusFuncionario == 'ativo' ? 'selected' : "") ?>>Ativo</option>
                <option value="inativo" <?= ($statusFuncionario == 'inativo' ? 'selected' : "") ?>>Inativo</option>
            </select>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <button name="btoExcluir" class="btn btn-danger btn-lg" formaction="../ConexaoPHP/funcionario_excluir.php" onclick="Excluir()">Excluir</button>
            <a href="sistema.php?tela=funcionario" name="btoLimpar" id="btoLimpar" class="btn btn-primary btn-lg">Limpar</a>
            <button name="btoAlterar" class="btn btn-warning btn-lg" formaction="../ConexaoPHP/funcionario_alterar.php" onclick="Alterar()">Alterar</button>
            <button name="btoCadastrar" class="btn btn-success btn-lg" formaction="../ConexaoPHP/funcionario_cadastrar.php" onclick="Cadastrar()">Cadastrar</button>
        </div>
    </div>
</form>

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

<script>
    let formulario = document.getElementById("frmfuncionario");
    let id =document.getElementById("txtId");
    let Nome= document.getElementById("txtNome");
    let Status= document.getElementById("txtStatus");
    let Nascimento= document.getElementById("txtNascimento");
    let CPF= document.getElementById("txtCpf");
    let CEP= document.getElementById("txtCep");
    let Email= document.getElementById("txtEmail");
    let Login= document.getElementById("txtLogin");
    let Senha= document.getElementById("txtSenha");
   
    



    function Pesquisar()
    {
        
        if(id.value.trim() == "")
        {
            alert("Erro, o Id Funcionario deve ser preenchido");
            id.focus();
            return;
        }

        formulario.action = "sistema.php?tela=funcionario";
        formulario.submit();

    }

    function Alterar()
    {
        
        if(id.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            id.focus();
            return;
        }

        formulario.action = "../ConexaoPHP/funcionario_alterar.php";
        formulario.submit();

    }

    function Excluir()
    {
        
        if(id.value.trim() == "")
        {
            alert("Erro, o ID do Funcionario deve ser preenchido");
            id.focus();
            return;
        }

        formulario.action = "../ConexaoPHP/funcionario_excluir.php";
        formulario.submit();

    }

    function Cadastrar()
    {
    
        if(Nome.value.trim() == "")
        {
            alert("Erro, o nome deve ser preenchido");
           Nome.focus();
           return;
            
        }
        
        if(Status.value == "")
        {
            alert("Erro, o Status deve ser preenchido");
            Status.focus();
           return;
            
        }

        if(Nascimento.value.trim() == "")
        {
            alert("Erro, o Data de Nascimento deve ser preenchido");
            Nascimento.focus();
           return;
            
        }
        
        if(CPF.value.trim() == "")
        {
           alert("Erro, CPF deve ser preenchido");
           Cpf.focus();
           return;
            
        }

        if(Email.value.trim() == "")
        {
           alert("Erro, Email deve ser preenchido");
          Email.focus();
           return;
            
        }

        if(Senha.value.trim() == "")
        {
           alert("Erro, Senha deve ser preenchido");
           Senha.focus();
           return;
            
        }

        if(Login.value.trim() == "")
        {
           alert("Erro, Login deve ser preenchido");
          Login.focus();
           return;
            
        }
        
        
        if(CEP.value.trim() == "")
        {
            alert("Erro, o CEP deve ser preenchido");
            CEP.focus();
           return;
            
        }

        formulario.action = "../ConexaoPHP/funcionario_cadastrar.php";
        formulario.submit();

    }


</script>