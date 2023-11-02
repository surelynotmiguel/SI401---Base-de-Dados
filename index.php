<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Base de Dados - Cadastro</title>
</head>
<body>
    <div class="page-wrapper">
        <div class="menu-wrapper">
            <div class="menu">
                <h3 class="title">Menu</h3>
                <hr>
                <nav class="buttons">
                    <ul>
                        <li><a href="index.php">Cadastrar</a></li>
                        <li><a href="listaAlunos.php">Alunos Cadastrados</a></li>
                    </ul>
                </nav>
            </div>
            <p class="copyright">&copy; 2023 - Miguel Miranda Melo Donanzam<br>m260851@dac.unicamp.br</p>
        </div>
        <div class="register">
            <div class="register-box">
                <h1>Cadastro</h1>
                <form action="listaAlunos.php" method="post">
                    <input type="text" name="nome" placeholder="Nome" maxlength="100">
                    <input type="number" name="ra" placeholder="R.A." maxlength="6">
                    <br>
                    <input type="radio" id="masculino" name="genero" value="Masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="feminino" name="genero" value="Feminino">
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="prefiro-nao-especificar" name="genero" value="Prefiro Não Especificar">
                    <label for="prefiro-nao-especificar">Prefiro Não Especificar</label>
                    <input type="radio" id="outro" name="genero" value="Outro"><label for="outro">Outro</label><br>
                    <input type="text" id="outroInput" name="genero_outro" placeholder="Outro">
                    <input type="number" name="idade" placeholder="Idade">
                    <input type="text" name="endereco" placeholder="Endereço">
                    <input type="tel" name="telefone" placeholder="Telefone">
                    <input type="email" name="email" placeholder="E-mail">
                    <br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>