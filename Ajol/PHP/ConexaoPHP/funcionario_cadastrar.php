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
                insert into funcionario
                (
                    nome_funcionario,
                    login_funcionario,
                    senha_funcionario,
                    cpf_funcionario,
                    datanasc_funcionario,
                    img_funcionario,
                    bairro_funcionario,
                    numero_funcionario,
                    compl_funcionario,
                    cep_funcionario,
                    email_funcionario,
                    obs_funcionario,
                    status_funcionario
                )
                value
                (
                    :nome_funcionario,
                    :login_funcionario,
                    :senha_funcionario,
                    :cpf_funcionario,
                    :datanasc_funcionario,
                    :img_funcionario,
                    :bairro_funcionario,
                    :numero_funcionario,
                    :compl_funcionario,
                    :cep_funcionario,
                    :email_funcionario,
                    :obs_funcionario,
                    :status_funcionario
                )
            ");

            $sql->execute(array(
                ':nome_funcionario'=>$nome,
                ':login_funcionario'=>$login,
                ':senha_funcionario'=>$senha,
                ':cpf_funcionario'=>$cpf,
                ':datanasc_funcionario'=>$datanascimento,
                ':img_funcionario'=>$img['name'],
                ':bairro_funcionario'=>$bairro,
                ':numero_funcionario'=>$numero,
                ':compl_funcionario'=>$complemento,
                ':cep_funcionario'=>$cep,
                ':email_funcionario'=>$email,
                ':obs_funcionario'=>$obs,
                ':status_funcionario'=>$status
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: ' .$conn->lastInsertId(). '</p>';

                $pasta = '../../img/fun/'.$conn->lastInsertId().'/';

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
        header('Location:../TelasPHP/sistema.php?tela=funcionario');
    }

?>

<a href="../TelasPHP/sistema.php?tela=funcionario">Voltar</a>