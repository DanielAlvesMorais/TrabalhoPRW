<?php
    include('../includes/includes.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM animal WHERE a_id = $id";
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
    <link rel="stylesheet" href="../style/style_cadastro.css">
</head>
<body>
    <main>
            <aside class="form-flex">
            <div class="form-container">
                <p class="title">Atualizar informações do animal</p>
                <div>
                    <center>
                    <?php 
                        echo '<td><img src="../Cadastros/'.$row['a_imagem'].'" width="100px" height="100px"></td>';
                    ?>
                    </center>
                </div>
                <form class="form" action="../Atualizar/AAnimalEXE.php" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" accept="image/*">
                    </div> 
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
                    <input type="hidden" name="id" value="<?php echo $row['a_id']?>">
                    <div>
                        <label for="ativo">O Animal está castrado<br></label>
                        <input type="radio" name="castrado" id="castrado" value="1">
                    </div>
                    <div class="input-group">
                        <label for="p_nome">Nome do dono:<br></label>
                        <select name="idp" id="idp">
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