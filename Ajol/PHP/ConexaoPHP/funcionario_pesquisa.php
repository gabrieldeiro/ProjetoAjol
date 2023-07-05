<?php
    include_once('conexao.php');

    $idFuncionario = '';
    $nomeFuncionario = '';
    $loginFuncionario = '';
    $senhaFuncionario = '';
    $cpfFuncionario = '';
    $datanascimentoFuncionario = '';
    $imgFuncionario = '';
    $enderecoFuncionario = '';
    $bairroFuncionario = '';
    $numeroFuncionario = '';
    $cidadefuncionario = '';
    $estadofuncionario = '';
    $complementoFuncionario = '';
    $cepFuncionario = '';
    $emailFuncionario = '';
    $obsFuncionario = '';
    $statusFuncionario = '';
    
    if($_POST)
    {
        $id=$_POST['txtId'];

        $sql = $conn->query('select * from funcionario where id_funcionario='.$id);

        if($sql->rowCount()>=1)
        {
            foreach($sql as $row)
            {
                $idFuncionario = $row[0];
                $nomeFuncionario = $row[1];
                $loginFuncionario = $row[2];
                $senhaFuncionario = $row[3];
                $cpfFuncionario = $row[5];
                $datanascimentoFuncionario = $row[6];
                $imgFuncionario = $row[14];
                $enderecoFuncionario = $row[7];
                $bairroFuncionario = $row[10];
                $numeroFuncionario = $row[8];
                $cidadeFuncionario = $row[15];
                $estadoFuncionario= $row[16];
                $complementoFuncionario = $row[9];
                $cepFuncionario = $row[11];
                $emailFuncionario = $row[4];
                $obsFuncionario = $row[12];
                $statusFuncionario = $row[13];

            }

            

        }
        else
        {
            echo '<p>Funcionario não existe</p>';
        }

    }
    

?>


