<?php
    include('../includes/includes.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE c_id = $id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/style_cadastro.css">
</head>
<body>
    <main>
            <aside class="form-flex">
            <div class="form-container">
                <p class="title">Cadastre de Cidades</p>
                <form class="form" action="../Atualizar/ACidadeEXE.php" method="post">
                    <div class="input-group">
                        <label for="nome">Nome Da Cidade</label>
                        <input type="text" name="nome" id="nome" placeholder="nome">
                    </div>
                    <div class="input-group">
                    <label for="nome">Estado:<br></label>
                    <select name="estado" id="estado">
                <option value="AC" 
                    <?php echo $row['c_estado'] == "AC" ? "selected" : ""?> >Acre</option>
                <option value="AL"
                    <?php echo $row['c_estado'] == "AL" ? "selected" : ""?> >Alagoas</option>
                <option value="AP"
                    <?php echo $row['c_estado'] == "AP" ? "selected" : ""?> >Amapá</option>
                <option value="AM"
                    <?php echo $row['c_estado'] == "AM" ? "selected" : ""?> >Amazonas</option>
                <option value="BA"
                    <?php echo $row['c_estado'] == "BA" ? "selected" : ""?> >Bahia</option>
                <option value="CE"
                    <?php echo $row['c_estado'] == "CE" ? "selected" : ""?> >Ceará</option>
                <option value="DF"
                    <?php echo $row['c_estado'] == "DF" ? "selected" : ""?> >Distrito Federal</option>
                <option value="ES"
                    <?php echo $row['c_estado'] == "ES" ? "selected" : ""?> >Espírito Santo</option>
                <option value="GO"
                    <?php echo $row['c_estado'] == "GO" ? "selected" : ""?> >Goiás</option>
                <option value="MA"
                    <?php echo $row['c_estado'] == "MA" ? "selected" : ""?> >Maranhão</option>
                <option value="MT"
                    <?php echo $row['c_estado'] == "MT" ? "selected" : ""?> >Mato Grosso</option>
                <option value="MS"
                    <?php echo $row['c_estado'] == "MS" ? "selected" : ""?> >Mato Grosso do Sul</option>
                <option value="MG"
                    <?php echo $row['c_estado'] == "MG" ? "selected" : ""?> >Minas Gerais</option>
                <option value="PA"
                    <?php echo $row['c_estado'] == "PA" ? "selected" : ""?> >Pará</option>
                <option value="PB"
                    <?php echo $row['c_estado'] == "PB" ? "selected" : ""?> >Paraíba</option>
                <option value="PR"
                    <?php echo $row['c_estado'] == "PR" ? "selected" : ""?> >Paraná</option>
                <option value="PE"
                    <?php echo $row['c_estado'] == "PE" ? "selected" : ""?> >Pernambuco</option>
                <option value="PI"
                    <?php echo $row['c_estado'] == "PI" ? "selected" : ""?> >Piauí</option>
                <option value="RJ"
                    <?php echo $row['c_estado'] == "RJ" ? "selected" : ""?> >Rio de Janeiro</option>
                <option value="RN"
                    <?php echo $row['c_estado'] == "RN" ? "selected" : ""?> >Rio Grande do Norte</option>
                <option value="RS"
                    <?php echo $row['c_estado'] == "RS" ? "selected" : ""?> >Rio Grande do Sul</option>
                <option value="RO"
                    <?php echo $row['c_estado'] == "RO" ? "selected" : ""?> >Rondônia</option>
                <option value="RR"
                    <?php echo $row['c_estado'] == "RR" ? "selected" : ""?> >Roraima</option>
                <option value="SC"
                    <?php echo $row['c_estado'] == "SC" ? "selected" : ""?> >Santa Catarina</option>
                <option value="SP"
                    <?php echo $row['c_estado'] == "SP" ? "selected" : ""?> >São Paulo</option>
                <option value="SE"
                    <?php echo $row['c_estado'] == "SE" ? "selected" : ""?> >Sergipe</option>
                <option value="TO"
                    <?php echo $row['c_estado'] == "TO" ? "selected" : ""?> >Tocantins</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $row['c_id']?>">
        </div>
        <div>
            <button type="submit">Modificar</button>
                </form>
            </div>
        </aside>
    </main>
</body>
</html>