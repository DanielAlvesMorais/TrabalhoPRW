<?php
        include('../includes/includes.php');
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raça'];
        $datan = $_POST['datan'];
        $castrado = $_POST['castrado'];
        $idp = $_POST['id'];

        $idade = new DateTime($datan);
        $da = new DateTime();
        $idade = $da->diff($idade);
        $idade = $idade->y;
        
        if($castrado != 1)
        {
            $castrado = 0;
        }

        echo "<h1>Dados da cidade</h1>";
        echo "Nome: $nome<br>";

        $sql = "UPDATE animal SET a_nome = '$nome', a_especie = '$especie', a_raça = '$raca', a_datan = '$datan', a_castrado = '$castrado', p_id = '$idp' WHERE a_id = $id";
        echo $sql;

        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
?>