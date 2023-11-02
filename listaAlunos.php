<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" grity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" grity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Base de Dados - Lista de Alunos</title>
</head>
<body>
    <?php
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $ra = $_POST['ra'];
            $idade = $_POST['idade'];
            $genero = $_POST['genero'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            $aluno = [
                'nome' => $nome,
                'ra' => $ra,
                'idade' => $idade,
                'genero' => $genero,
                'endereco' => $endereco,
                'telefone' => $telefone,
                'email' => $email,
            ];

            $_SESSION['alunos'][] = $aluno;
        }
    ?>
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
        <div class="list">
            <div class="search-bar-wrapper">
                <div class="search-bar">
                    <h1>Lista de Alunos</h1>
                    <form action="listaAlunos.php" method="post">
                        <input type="search" id="pesquisar" name="pesquisa" placeholder="Pesquisar aluno...">
                        <button type="submit"><i class="fa fa-search icon fa-lg"></i></button>
                        <button type="reset"><i class="fa fa-times fa-lg"></i></button>
                        <p>*Pesquisa por nome ou R.A.</p>
                    </form> 
                </div>
            </div>
            <hr>
            <div class="students-list-box">
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>R.A.</th>
                        <th>Idade</th>
                        <th>Gênero</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                    </tr>
                    <?php
                        if (isset($_SESSION['alunos'])){
                            $alunos = $_SESSION['alunos'];

                            function compareStudentsByRA($alunoA, $alunoB) {
                                return $alunoA['ra'] - $alunoB['ra'];
                            }
                            usort($alunos, 'compareStudentsByRA');
    
                            foreach ($alunos as $aluno) {
                                echo '<tr>';
                                echo '<td>' . $aluno['nome'] . '</td>';
                                echo '<td>' . $aluno['ra'] . '</td>';
                                echo '<td>' . $aluno['idade'] . '</td>';
                                echo '<td>' . $aluno['genero'] . '</td>';
                                echo '<td>' . $aluno['endereco'] . '</td>';
                                echo '<td>' . $aluno['telefone'] . '</td>';
                                echo '<td>' . $aluno['email'] . '</td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>