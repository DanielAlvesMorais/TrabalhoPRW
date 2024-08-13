<?php
        include('../includes/includes.php');

        $nome_foto = "";
        if(file_exists($_FILES['foto']['tmp_name']))
        {
            $pasta_destino = '../foto/';
            $extensão = strtolower(substr( $_FILES['foto']['name'], -4));
            $nome_foto = $pasta_destino . date('Ymd-His').$extensão;
            move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
        }

        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raça'];
        $datan = $_POST['datan'];
        $castrado = $_POST['castrado'];
        $id = $_POST['id'];

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

        $sql = "INSERT INTO animal (a_nome, a_imagem, a_especie, a_raça, a_datan, a_castrado, p_id, a_idade)";
        $sql .= " VALUES('".$nome."','".$nome_foto."','".$especie."','".$raca."','".$datan."','".$castrado."','".$id."','".$idade."')";
        echo $sql;

        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>