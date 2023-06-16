<?php 
    include_once('conexaoloja.php')
    
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
                    login_usuario,
                    senha_usuario,
                    cpf_usuario,
                    data_nasc_usuario,
                    img_usuario,
                    endereco_usuario,
                    bairro_usuario,
                    numero_usuario,
                    compl_usuario,
                    cep_usuario,
                    obs_usuario,
                    status_usuario
                )
                values
                (
                    :nome_usuario,
                    :login_usuario,
                    :senha_usuario,
                    :cpf_usuario,
                    :data_nasc_usuario,
                    :img_usuario,
                    :endereco_usuario
                    :bairro_usuario,
                    :numero_usuario,
                    :compl_usuario,
                    :cep_usuario,
                    :obs_usuario,
                    :status_usuario
                )

            ");
            
            $sql ->execute(array(
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
                ':obs_usuario'=>$obs,
                ':status_usuario'=>$status

            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: ' .$conn->lastInsertId(). '</p>';

                $pasta = 'img/'.$conn->lastInsertId().'/';

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
        header('Locatiom:##') //Link de direcionamento para a tela dps do cadastro
    }

?>

<a href="##">Voltar</a>
