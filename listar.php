<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista de Funcionario</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../img/icone.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Sistema
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cliente
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../Cliente/form.html">Cadastrar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Cliente/listar.php">Listar</a>
                    </div>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Funcionário
                </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="form.html">Cadastrar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item active" href="listar.php">Listar</a>
                        </div>
                    </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="../sobre.php">Sobre</a>
                </li>

    </nav>

    <div class="container">
    <H2>Listar Funcionarios</H2>

    <?php
    include("../conexao.php")
    $SQL = mysqli_query($conexao,"select * from funcionario")
    or die(mysqli_error($conexao));
    $linha = mysqli_fetch_assoc($SQL);
    ?>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Celular</th>
                <th>Sexo</th>
                <th>Salario</th>
                <th>Endereço</th>
                <th>Cidade</th>
            </tr>

        </thead>
        <tbody>
            <?php
            do {
                echo ("<tr>");//começa a linha 
                echo ("<td>".$linha["nome"]."</td>");
                echo ("<td>".$linha["celular"]."</td>");
                echo ("<td>".$linha["sexo"]."</td>");
                echo ("<td>".$linha["salario"]."</td>");
                echo ("<td>".$linha["endereco"]."</td>");
                echo ("<td>".$linha["cidade"]."</td>");
            } while ($linha = mysqli_fetch_assoc($SQL));
            ?>
        </tbody>
    </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="../js/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
    <script src="../js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>
</body>

</html>