<?php
        include('../includes/includes.php');
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];

        echo "<h1>Dados da cidade</h1>";
        echo "Nome: $nome<br>";

        $sql = "UPDATE pessoa SET p_nome = '$nome', p_email = '$email', p_endereço = '$endereco', p_bairro = '$bairro', p_cep = '$cep', c_id = '$cidade' WHERE p_id = $id";
        echo $sql;

        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
?>