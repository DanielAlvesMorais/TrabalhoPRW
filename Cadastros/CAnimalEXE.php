<?php
        include('../includes/includes.php');
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raça'];
        $datan = $_POST['datan'];
        $castrado = $_POST['castrado'];
        $id = $_POST['id'];

        echo "<h1>Dados da cidade</h1>";
        echo "Nome: $nome<br>";

        $sql = "INSERT INTO animal (a_nome, a_especie, a_raça, a_datan, a_castrado, p_id)";
        $sql .= " VALUES('".$nome."','".$especie."','".$raca."','".$datan."','".$castrado."','".$id."')";
        echo $sql;

        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>