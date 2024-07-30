<?php
    include('../includes/includes.php');
    $id = $_POST['id'];
    $estado = $_POST['estado'];
    $nome = $_POST['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cidade</title>
</head>
<body>
    <h1>Alteração de Cidade</h1>
    <?php
        echo "<p>Id=$id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Estado: $estado</p>";
        $sql = "UPDATE cidade SET c_nome = '$nome', c_estado = '$estado' WHERE c_id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados!<br>".mysqli_error($con);
    ?>
</body>
</html>