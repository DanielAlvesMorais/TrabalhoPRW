<?php
        include('../includes/includes.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $id = $_POST['id'];

        echo "<h1>Dados da cidade</h1>";
        echo "Nome: $nome<br>";

        $sql = "INSERT INTO pessoa (p_nome, p_email, p_endereço, p_bairro, p_cep, c_id)";
        $sql .= " VALUES('".$nome."','".$email."','".$endereco."','".$bairro."','".$cep."','".$id."')";
        echo $sql;

        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
?>