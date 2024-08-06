<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Animais</title>
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
        $sql = "SELECT pe.a_id, pe.a_nome, pe.a_especie, pe.a_raça, pe.a_datan, pe.a_idade, pe.a_castrado, ci.p_nome
                FROM animal pe 
                LEFT JOIN pessoa ci ON pe.p_id = ci.p_id";

        // Executar a consulta
        $result = mysqli_query($con, $sql);

        // Verificar se a consulta foi bem-sucedida
        if (!$result) {
            die('Erro na consulta: ' . mysqli_error($con));
        }

    ?>

    <h1><center>Consulta de Animais</center></h1>

    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Especie</th>
            <th>Raça</th>
            <th>Data de Nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Nome do dono</th>
            <th>Atualizar</th>
            <th>Deletar</th>
        </tr>
        <?php
            // Exibir os dados da consulta
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                
                $data_original = $row['a_datan'];
                $data = new DateTime($data_original);
                $data_formatada = $data->format('d-m-y');

                echo "<tr>";
                echo "<td>".$row['a_id']."</td>";
                echo "<td>".$row['a_nome']."</td>";
                echo "<td>".$row['a_especie']."</td>";
                echo "<td>".$row['a_raça']."</td>";
                echo "<td>".$data_formatada."</td>";
                echo "<td>".$row['a_idade']."</td>";
                echo "<td>";
                if($row['a_castrado'] == 1)
                {
                    echo "Sim";
                }
                else
                {
                    echo "Não";
                }
                echo "</td>";
                echo "<td>".$row['p_nome']."</td>";
                echo "<td> Atualizar as informações de <a href ='AAnimal.php?id=".$row['a_id']."'>".$row['a_nome']."</a></td>";
                echo "<td> Deletar as informações de  <a href ='DAnimal.php?id=".$row['a_id']."'>".$row['a_nome']."</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>