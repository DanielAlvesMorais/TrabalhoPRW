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

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raça'];
        $datan = $_POST['datan'];
        $castrado = $_POST['castrado'];
        $idp = $_POST['idp'];

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
        
        if($nome_foto == "")
        {
            $sql = "UPDATE animal SET a_nome = '$nome', a_especie = '$especie', a_raça = '$raca', a_datan = '$datan', a_idade = '$idade', a_castrado = '$castrado', p_id = '$idp' WHERE a_id = $id";
            echo $sql;
        }
        else
        {
            $sql = "UPDATE animal SET a_nome = '$nome', a_imagem = '$nome_foto', a_especie = '$especie', a_raça = '$raca', a_datan = '$datan', a_idade = '$idade', a_castrado = '$castrado', p_id = '$idp' WHERE a_id = $id";
            echo $sql;
        }

        $result = mysqli_query($con, $sql);
        if($result)
        {
            echo "Dados Atualizados!";
        }
        else
        {
            echo "Erro ao atualizar dados!<br>".mysqli_error($con);
        }
?>