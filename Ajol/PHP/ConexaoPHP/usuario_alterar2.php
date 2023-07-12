<?php 
    include_once('conexao.php');
    include_once('loginautenticar.php');
    include_once('usuario_pesquisa2.php');
    
    if($_POST)
    {
        $id = $idusuariologin;
        $nome = $_POST['txtNome'];
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];
        $cpf = $_POST['txtCpf'];
        $img = '';
        $endereco = $_POST['txtEndereco'];
        $bairro = $_POST['txtBairro'];
        $numero = $_POST['txtNumero'];
        $cidade = $_POST['txtCidade'];
        $estado = $_POST['txtEstado'];
        $cep = $_POST['txtCep'];
        $email = $_POST['txtEmail'];



        try 
        {
            if (isset($_FILES['txtImg']))
            {
                $img = $_FILES['txtImg'];
            }
            else
            {
                $img = '';
            }

            
            if($img['name'] != '')
            {
                
                $sql = $conn->prepare("
                    update usuario set
                        nome_usuario=:nome_usuario,
                        cpf_usuario=:cpf_usuario,
                        login_usuario=:login_usuario,
                        senha_usuario=:senha_usuario,
                        img_usuario=:img_usuario,
                        email_usuario=:email_usuario,
                        endereco_usuario=:endereco_usuario,
                        numero_usuario=:numero_usuario,
                        bairro_usuario=:bairro_usuario,
                        cidade_usuario=:cidade_usuario,
                        estado_usuario=:estado_usuario,
                        cep_usuario=:cep_usuario
                    where id_usuario=:id_usuario

                ");

                $sql ->execute(array(
                    ':id_usuario'=>$id,
                    ':nome_usuario'=>$nome,
                    ':cpf_usuario'=>$cpf,
                    ':login_usuario'=>$login,
                    ':senha_usuario'=>$senha,
                    ':img_usuario'=>$img['name'],
                    ':email_usuario'=>$email,
                    ':endereco_usuario'=>$endereco,
                    ':numero_usuario'=>$numero,
                    ':bairro_usuario'=>$bairro,
                    ':cidade_usuario'=>$cidade,
                    ':estado_usuario'=>$estado,
                    ':cep_usuario'=>$cep

                ));
            }
            else
            {
                $sql = $conn->prepare("
                update usuario set
                    nome_usuario=:nome_usuario,
                    cpf_usuario=:cpf_usuario,
                    login_usuario=:login_usuario,
                    senha_usuario=:senha_usuario,
                    email_usuario=:email_usuario,
                    endereco_usuario=:endereco_usuario,
                    numero_usuario=:numero_usuario,
                    bairro_usuario=:bairro_usuario,
                    cidade_usuario=:cidade_usuario,
                    estado_usuario=:estado_usuario,
                    cep_usuario=:cep_usuario
                    where id_usuario=:id_usuario
                ");

                $sql ->execute(array(
                    ':id_usuario'=>$id,
                    ':nome_usuario'=>$nome,
                    ':cpf_usuario'=>$cpf,
                    ':login_usuario'=>$login,
                    ':senha_usuario'=>$senha,
                    ':email_usuario'=>$email,
                    ':endereco_usuario'=>$endereco,
                    ':numero_usuario'=>$numero,
                    ':bairro_usuario'=>$bairro,
                    ':cidade_usuario'=>$cidade,
                    ':estado_usuario'=>$estado,
                    ':cep_usuario'=>$cep

                ));

            }

                
           
            if($sql->rowCount()>=1)
            {
                echo '<p>Dados alterados com sucesso!</p>';

                $pasta = '../../img/usu/'.$id.'/';
                if (!file_exists($pasta))
                {
                    mkdir($pasta);
                }

                $foto = $pasta.$img['name'];

                move_uploaded_file($img['tmp_name'],$foto);
            }

        } catch (PDOException $ex) 
        {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:../TelasPHP/detalheusuario.php'); 
    }

?>



<form action="" method="post" enctype="multipart/form-data">

    <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="../TelasPHP/Detalheusuario.php">Voltar </button>
</form>