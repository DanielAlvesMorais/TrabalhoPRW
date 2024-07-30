<?php
        include('../includes/includes.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];

        echo "<h1>Dados da cidade</h1>";
        echo "Nome: $nome<br>";

        $sql = "INSERT INTO Cidade (c_nome, c_estado)";
        $sql .= " VALUES('".$nome."','".$estado."')";
        echo $sql;

        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>