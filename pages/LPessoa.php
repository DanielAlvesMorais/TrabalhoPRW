<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Clientes</title>
    <style>
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        include('../includes/includes.php');

        // Consulta SQL
        $sql = "SELECT pe.p_id, pe.p_nome, pe.p_email, pe.p_endereço, pe.p_bairro, pe.p_cep, ci.c_nome, ci.c_estado
                FROM pessoa pe 
                LEFT JOIN cidade ci ON pe.c_id = ci.c_id";

        // Executar a consulta
        $result = mysqli_query($con, $sql);

        // Verificar se a consulta foi bem-sucedida
        if (!$result) {
            die('Erro na consulta: ' . mysqli_error($con));
        }
    ?>

    <h1><center>Consulta de Clientes</center></h1>

    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Cep</th>
            <th>Atualizar</th>
            <th>Deletar</th>
        </tr>
        <?php
            // Exibir os dados da consulta
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['p_id']."</td>";
                echo "<td>".$row['p_nome']."</td>";
                echo "<td>".$row['p_email']."</td>";
                echo "<td>".$row['p_endereço']."</td>";
                echo "<td>".$row['p_bairro']."</td>";
                echo "<td>".$row['c_nome']." - ".$row['c_estado']."</td>";
                echo "<td>".$row['p_cep']."</td>";
                echo "<td> Atualizar as informações de <a href ='APessoa.php?id=".$row['p_id']."'>".$row['p_nome']."</a></td>";
                echo "<td> Deletar as informações de  <a href ='DPessoa.php?id=".$row['p_id']."'>".$row['p_nome']."</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
