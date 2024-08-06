<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="../style/style_cadastro.css">
</head>
<body>
    <main>
            <aside class="form-flex">
            <div class="form-container">
                <p class="title">Cadastre um animal</p>
                <form class="form" action="../Cadastros/CAnimalEXE.php" method="post">
                    <div class="input-group">
                        <label for="nome">Nome Do Animal</label>
                        <input type="text" name="nome" id="surname" placeholder="nome">
                    </div>
                    <div class="input-group">
                        <label for="especie">Especie do Animal</label>
                        <input type="text" name="especie" id="surname" placeholder="especie">
                    </div>
                    <div class="input-group">
                        <label for="raça">Raça do Animal</label>
                        <input type="text" name="raça" id="surname" placeholder="raça">
                    </div>
                    <div class="input-group">
                        <label for="surname">Data de nascimento do Animal</label>
                        <input type="date" name="datan" id="surname" placeholder="datan">
                    </div>
                    <div>
                        <label for="ativo">O Animal está castrado<br></label>
                        <input type="radio" name="castrado" id="castrado" value="1">
                    </div>
                    <div class="input-group">
                        <label for="p_nome">Nome do dono:<br></label>
                        <select name="id" id="id">
                            <?php
                                include('../includes/includes.php');
                                $sql = "SELECT * FROM pessoa";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<option value='".$row['p_id']."'>".$row['p_nome']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <input class="sign" type="submit" value="Cadastrar">
                </form>
            </div>
        </aside>
    </main>
</body>
</html>