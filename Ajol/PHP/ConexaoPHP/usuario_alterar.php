<?php 
    include_once('conexao.php');
    
    if($_POST)
    {
        $id =$_POST['txtId'];
        $nome = $_POST['txtNome'];
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];
        $cpf = $_POST['txtCpf'];
        $datanascimento = $_POST['txtNascimento'];
        $img = $_FILES['txtImg']['name'];
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
                $img = '';
            }


            $sql = $conn->prepare("
                update usuario set
                    nome_usuario=:nome_usuario,
                    login_usuario=:login_usuario,
                    senha_usuario=:senha_usuario,
                    cpf_usuario=:cpf_usuario,
                    data_nasc_usuario=:data_nasc_usuario,
                    img_usuario=:img_usuario,
                    endereco_usuario=:endereco_usuario,
                    bairro_usuario=:bairro_usuario,
                    numero_usuario=:numero_usuario,
                    compl_usuario=:compl_usuario,
                    cep_usuario=:cep_usuario,
                    email_usuario=:email_usuario,
                    obs_usuario=:obs_usuario,
                    status_usuario=:status_usuario
                where id_usuario=:id_usuario

            ");
            
            $sql ->execute(array(
                ':id_usuario'=>$id,
                ':nome_usuario'=>$nome,
                ':login_usuario'=>$login,
                ':senha_usuario'=>$senha,
                ':cpf_usuario'=>$cpf,
                ':data_nasc_usuario'=>$datanascimento,
                ':img_usuario'=>$img['name'],
                ':endereco_usuario'=>$endereco,
                ':bairro_usuario'=>$bairro,
                ':numero_usuario'=>$numero,
                ':compl_usuario'=>$complemento,
                ':cep_usuario'=>$cep,
                ':email_usuario'=>$email,
                ':obs_usuario'=>$obs,
                ':status_usuario'=>$status

            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados alterados com sucesso!</p>';

                $pasta = '../Ajol/img/usu/'.$id.'/';
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
        header('Location:../TelasPHP/frm_usuario.php'); 
    }

?>

<a href="../TelasPHP/frm_usuario.php">Voltar</a>
