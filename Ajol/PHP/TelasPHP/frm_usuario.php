 <div class="col-sm-12">
     <form action="" method="post" style="background-color: darkgray;">
         <div class="row mt-3 ">
             <div class="col-sm-6">Nome do Usuario
                 <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome" value=<?php $nome ?>>
             </div>
             <div class="col-sm-3 mt-4">
                 <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro" id="txtCadastro" hidden>
             </div>
             <div class="col-sm-2"> ID do Usuario
                 <input type="number" class="form-control" style="border-radius: 25px;" name="txtID" min="0" value="<?= $idUsuario ?>">
             </div>
             <div class="col-sm-1 text-center mt-4">
                 <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="_sistema.php?tela=produto">&#128269;</button>
             </div>

         </div>

         <div class="row mt-3 ">
             <div class="col-sm-3">Login
                 <input type="text" class="form-control" style="border-radius: 25px;" name="txtLogin" id="txtLogin" value="<?= $login ?>">>
             </div>
             <div class="col-sm-3"> Senha
                 <input type="password" class="form-control" style="border-radius: 25px;" name="txtsenha" id="txtsenha" value="<?= $senha ?>">
             </div>
             <div class="col-sm-3"> Data de Nascimento
                 <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro" id="txtCadastro" value="<?= substr($datanascimento, 0, 10) ?>">
             </div>
             <div class="col-sm-3">CPF
                 <input type="text" class="form-control" style="border-radius: 25px;" name="txtcpf" id="txtcpf">
             </div>

         </div>

         <div class="row mt-3 ">
             <div class="col-sm-3">CEP
                 <input type="text" class="form-control" style="border-radius: 25px;" name="txtCep" id="txtCep">
             </div>
             <div class="col-sm-5">Endereço
                 <input type="text" class="form-control" style="border-radius: 25px;" name="txtendereço" id="txtendereço">
             </div>
             <div class="col-sm-2">Bairro
                 <input type="text" class="form-control" style="border-radius: 25px;" name="txtbairro" id="txtbairro">
             </div>
             <div class="col-sm-1">Numero
                 <input type="text" class="form-control" style="border-radius: 25px;" name="txtnumero" id="txtnumero">
             </div>
             <div class="col-sm-5">Complemento
                 <textarea name="text" class="form-control" id="txtcomplemento" style="border-radius: 25px;" cols="15" rows="2"></textarea>
             </div>
             <div class="col-sm-2">

             </div>
             <div class="col-sm-5">Observação
                 <textarea name="textObs" class="form-control" id="txtObs" style="border-radius: 25px;" cols="15" rows="2"></textarea>
             </div>

             <div class="row mt-3">
                 <div class="col-sm-3">
                     <select name="txtStatus" id="textStatus" class="form-control" style="border-radius: 25px;">
                         <option value="">--Selecione um Status--</option>
                         <option value="ativo">Ativo</option>
                         <option value="inativo">Inativo</option>
                     </select>
                 </div>
             </div>

         </div>
         <div class="row mt-3">
             <div class="col-sm-12 text-end">
                 <button type="button" class="btn btn-danger btn-lg">Excluir</button>
                 <button type="button" class="btn btn-primary btn-lg">Limpar</button>
                 <button type="button" class="btn btn-warning btn-lg">Alterar</button>
                 <button type="button" class="btn btn-success btn-lg">Cadastrar</button>
             </div>
         </div>

     </form>
 </div>