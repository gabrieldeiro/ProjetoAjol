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
                $loginFuncionario = $row[11];
                $senhaFuncionario = $row[12];
                $cpfFuncionario = $row[2];
                $datanascimentoFuncionario = $row[3];
                $imgFuncionario = $row[14];
                $enderecoFuncionario = $row[4];
                $bairroFuncionario = $row[7];
                $numeroFuncionario = $row[5];
                $complementoFuncionario = $row[6];
                $cepFuncionario = $row[8];
                $emailFuncionario = $row[13];
                $obsFuncionario = $row[9];
                $statusFuncionario = $row[10];

            }

            

        }
        else
        {
            echo '<p>Funcionario não existe</p>';
        }

    }
    

?>


