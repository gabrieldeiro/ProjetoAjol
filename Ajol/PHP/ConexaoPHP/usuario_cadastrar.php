<?php 
    include_once('conexao.php');
    
    if($_POST)
    {
        
        $nome = $_POST['txtNome'];
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];
        $cpf = $_POST['txtCpf'];
        $datanascimento = $_POST['txtNascimento'];
        $img = '';
        $endereco = $_POST['txtEndereco'];
        $bairro = $_POST['txtBairro'];
        $numero = $_POST['txtNumero'];
        $complemento = $_POST['txtComplemento'];
        $cep = $_POST['txtCep'];
        $email = $_POST['txtEmail'];
        $obs = $_POST['txtObs']; 
        $status = $_POST['txtStatus'];

        try 
        {
            if (isset($_FILES['txtImg']))
            {
                $img = $_FILES['txtImg'];
            }
            else
            {
                echo 'Erro, a imagem deve ser enviada';
                return;
            }

            $sql = $conn->prepare("
                insert into usuario
                (
	                nome_usuario,
                    cpf_usuario,
                    login_usuario,
                    senha_usuario,
                    img_usuario,
                    email_usuario,
                    data_nasc_usuario,
                    endereco_usuario,
                    numero_usuario,
                    compl_usuario,
                    bairro_usuario,
                    cep_usuario,
                    obs_usuario,
                    status_usuario
                )
                values
                (
                    :nome_usuario,
                    :cpf_usuario,
                    :login_usuario,
                    :senha_usuario,
                    :img_usuario,
                    :email_usuario,
                    :data_nasc_usuario,
                    :endereco_usuario,
                    :numero_usuario,
                    :compl_usuario,
                    :bairro_usuario,
                    :cep_usuario,
                    :obs_usuario,
                    :status_usuario
                )

            ");
            
            $sql->execute(array(
                ':nome_usuario'=>$nome,
                ':cpf_usuario'=>$cpf,
                ':login_usuario'=>$login,
                ':senha_usuario'=>$senha,
                ':img_usuario'=>$img['name'],
                ':email_usuario'=>$email,
                ':data_nasc_usuario'=>$datanascimento,
                ':endereco_usuario'=>$endereco,
                ':numero_usuario'=>$numero,
                ':compl_usuario'=>$complemento,
                ':bairro_usuario'=>$bairro,
                ':cep_usuario'=>$cep,
                ':obs_usuario'=>$obs,
                ':status_usuario'=>$status

            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: ' .$conn->lastInsertId(). '</p>';

                $pasta = '../../img/usu/'.$conn->lastInsertId().'/';

                if(!file_exists($pasta))
                {
                    mkdir($pasta);
                }

                $foto = $pasta.$img['name'];

                move_uploaded_file($img['tmp_name'],$foto);
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:../TelasPHP/sistema.php?tela=usuario'); 
    }

?>

<a href="../TelasPHP/sistema.php?tela=usuario">Voltar</a>
