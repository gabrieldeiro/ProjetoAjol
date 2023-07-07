<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once('../ConexaoPHP/conexao.php');
    ?>
    <title>
        <?php
        $sql = $conn->query('select * from produto where id_produto=' . $_GET['id']);
        if ($sql->rowCount() >= 1) {
            foreach ($sql as $row3) {
                $nome = $row3[2];
            }
        }
        echo $nome;
        ?>
    </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <?php
    $sql = $conn->query('select * from categoria where id_categoria=' . $_GET['id']);

    if($sql->rowCount()>=1)
    {
        foreach($sql as $row)
        {
            $idCategoria = $row[0];
            $nomeCategoria = $row[1];
            $descricaoCategoria = $row[2];
            $obsCategoria = $row[3];
            $statusCategoria = $row[4];
        }

    }
    
    ?>
</head>

<body>
    <div class="container-fluid" style="background-color: #404040;">
        <!-- Pegar ID -->
        <?php
        include_once('../ConexaoPHP/loginautenticar.php');
        include_once('topoDefinitivo.php');
        ?>

    </div>
</body>

</html>