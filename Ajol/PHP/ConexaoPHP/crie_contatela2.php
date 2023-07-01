<?php 
    include_once('conexao.php');
    
    if($_POST)
    {
        $id = $_POST['txtIdtemp'];
        $endereco = $_POST['txtEndereco'];
        $bairro = $_POST['txtBairro'];
        $numero = $_POST['txtNumero'];
        $complemento = $_POST['txtComplemento'];
        $cidade = $_POST['txtCidade'];
        $estado = $_POST['txtEstado'];
        $cep = $_POST['txtCep'];
         $cpf = $_POST['txtCpf'];
         $datanascimento = $_POST['txtNascimento'];
        


        try 
        {
            

            $sql = $conn->prepare("
            update usuario set
               
                    endereco_usuario=:endereco_usuario,
                    numero_usuario=:numero_usuario,
                    compl_usuario=:compl_usuario,
                    bairro_usuario=:bairro_usuario,
                    cidade_usuario=:cidade_usuario,
                    estado_usuario=:estado_usuario,
                    cep_usuario=:cep_usuario,
                    cpf_usuario=:cpf_usuario,
                    data_nasc_usuario=:data_nasc_usuario
                    where id_usuario=:id_usuario

                    
                            

            ");
            
            $sql->execute(array(
                ':endereco_usuario'=>$endereco,
                ':numero_usuario'=>$numero,
                ':compl_usuario'=>$complemento,
                ':bairro_usuario'=>$bairro,
                ':estado_usuario'=>$estado,
                ':cidade_usuario'=>$cidade,
                ':cep_usuario'=>$cep,
                ':cpf_usuario'=>$cpf,
                ':data_nasc_usuario'=>$datanascimento,
                ':id_usuario'=>$id
                

            ));

            if($sql->rowCount()>=1)
            {
                header('Location:../TelasPHP/crie-a-conta-3.php?id='.$id);
                // echo '<a href="../TelasPHP/crie-a-conta-2.php?id='.$conn->lastInsertId().'">proximo</a>';
            }
            

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:"../ConexaoPHP/crie-a-conta-3.php"'); 
    }

?>


