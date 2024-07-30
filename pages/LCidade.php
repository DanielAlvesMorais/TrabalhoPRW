<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Clientes</title>
    <style>
        table {
            width: 70%;
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
        $sql = "SELECT c_id, c_nome, c_estado
                FROM cidade";

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
            <th>Estado</th>
            <th>Altera</th>
            <th>Deleta</th>
        </tr>
        <?php
            // Exibir os dados da consulta
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['c_id']."</td>";
                echo "<td>".$row['c_nome']."</td>";
                echo "<td>".$row['c_estado']."</td>";
                echo "<td> Atualizar as informações de <a href ='ACidade.php?id=".$row['c_id']."'>".$row['c_nome']."</a></td>";
                echo "<td> Deletar as informações de  <a href ='DCidade.php?id=".$row['c_id']."'>".$row['c_nome']."</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>