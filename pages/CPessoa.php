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
                <p class="title">Cadastre dos Donos</p>
                <form class="form" action="../Cadastros/CPessoaEXE.php" method="post">
                    <div class="input-group">
                        <label for="nome">Nome Da Pessoa</label>
                        <input type="text" name="nome" id="surname" placeholder="nome">
                    </div>
                    <div class="input-group">
                        <label for="email">Email da Pessoa</label>
                        <input type="email" name="email" id="surname" placeholder="email">
                    </div>
                    <div class="input-group">
                        <label for="endereco">Endereço da Pessoa</label>
                        <input type="text" name="endereco" id="surname" placeholder="endereco">
                    </div>
                    <div class="input-group">
                        <label for="bairro">Bairro da Pessoa</label>
                        <input type="text" name="bairro" id="bairro" placeholder="bairro">
                    </div>
                    <label for="Cidade">Cidade:<br></label>
                    <div class="input-group">
                        <select name="id" id="id">
                            <?php
                                include('../includes/includes.php');
                                $sql = "SELECT * FROM cidade";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<option value='".$row['c_id']."'>".$row['c_nome']."/".$row['c_estado']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="cep">CEP da Pessoa</label>
                        <input type="text" name="cep" id="cep" placeholder="cep">
                    </div>
                    <input class="sign" type="submit" value="Cadastrar">
                </form>
            </div>
        </aside>
    </main>
</body>
</html>