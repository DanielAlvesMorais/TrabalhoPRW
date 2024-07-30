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
                <p class="title">Cadastre o seu animal</p>
                <form class="form" action="" method="post">
                    <div class="input-group">
                        <label for="name">Nome Do Animal</label>
                        <input type="text" name="name" id="name" placeholder="Nome">
                    </div>
                    <div class="input-group">
                        <label for="surname">Especie do Animal</label>
                        <input type="text" name="Especie" id="surname" placeholder="Especie">
                    </div>
                    <div class="input-group">
                        <label for="surname">Raça do Animal</label>
                        <input type="text" name="Raça" id="surname" placeholder="Raça">
                    </div>
                    <div class="input-group">
                        <label for="surname">Data de Nascimento do Animal</label>
                        <input type="date" name="datan" id="surname" placeholder="datan">
                    </div>
                    
                    <div class="input-group">
                        <label for="date">Código do Dono do Animal</label>
                        <input type="int" name="p_id" id="p_id" placeholder="p_id">
                    </div>
                    <input class="sign" type="submit" value="Cadastrar">
                </form>
            </div>
        </aside>
    </main>
</body>
</html>