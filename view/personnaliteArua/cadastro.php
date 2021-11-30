
<?php
require_once '../../model/Usuario.php';
$u = new Usuario;
?>

<doctype html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/main.css">

        <title>Login - Personnalité Aruã Cabelo e Estética</title>
    </head>

    <body>

        <!--Navbar-->
        <nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-dark ">
            <div class="container">
                <!--Img Logo Navbar-->
                <div id="imgLogoNavbar">
                    <a href="home.php" class="navbar-brand">
                        <img src="../../assets/Logos/Arua_logo_padrao.png" alt="logo">
                    </a>
                </div>
                <!--Img Logo Navbar-->

                <!--Button-->
                <button type="button" id="canvas" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#itens">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Button-->

                <!--Itens/Menu-->
                <div class="offcanvas offcanvas-end" id="itens" tabindex="-1">
                    <!--Canvas Header-->
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title">Personnalité Aruã</h5>
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="cl"></button>
                    </div>
                    <!--Canvas Header-->

                    <!--Canvas body-->
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre.php">Sobre</a>
                            </li>


                            <!--Dropdown-->
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Serviços</a>
                                <ul id="bgDropdown" class="dropdown-menu dropdown-menu-dark">
                                    <li>
                                        <a href="servicoFem.php" class="dropdown-item text-white">Feminino</a>
                                    </li>
                                    <li>
                                        <a href="servicoMas.php" class="dropdown-item text-white">Masculino</a>
                                    </li>
                                </ul>
                            </li>
                            <!--Dropdown-->

                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!--Canvas body-->
                </div>
                <!--Itens/Menu-->
            </div>
        </nav>
        <!--Navbar-->

        <!--cadastro-->
        <div id="Cadastro" class="container-fluid ">
            <div class="align-items-center">
                <a href="login.php" class="text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                </a>
                <a href="login.php" class="text-decoration-none text-secondary text-center a-item">Login</a>
            </div>
            <div>
                <h4 class="text-center display-6">Complete sua Conta Pessoal</h4>
            </div>

            <div class="formCadastro">
                <form action="" method="post">
                    <p>
                        <input type="text" name="nome" placeholder="Nome">
                    </p>
                    <p>
                        <input type="email" name="email" placeholder="E-mail">
                    </p>
                    <p class="mt-3">
                        <input type="date" name="date">
                    </p>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="password" name="senha" placeholder="Senha">
                        </div>
                        <div class="col">
                            <input type="password" name="validacaoSenha" placeholder="Digite Novamente a Senha">
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-dark" name="btn-cadastro">Criar Conta</button>
                        <?php

                        if (isset($_POST['email'])) {
                            $nomeUsuario = addslashes($_POST['nome']);
                            $dataNascimento = addslashes($_POST['date']);
                            $loginUsuario = addslashes($_POST['email']);
                            $senha = addslashes($_POST['senha']);
                            $validarSenha = addslashes($_POST['validacaoSenha']);

                            if (!empty($nomeUsuario) && !empty($dataNascimento) && !empty($loginUsuario) && !empty($senha)) {
                                $con =  new PDO("mysql:dbname=personalite_aruan; host=localhost", 'root', '');
                                if ($u->cadastrar($nomeUsuario, $loginUsuario, $dataNascimento, $senha)) {
                                    echo "<script>alert('Cadastrado com sucesso!');
                                    self.location.href='login.php'</script>";
                                }
                            } else {
                        ?>
                                <div class="alert alert-danger text-center ml-100" role="alert">
                                    Preencha Todos os campos!!!
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>

                </form>
            </div>
        </div>
        <!--cadastro-->



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
        </script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/script.js"></script>

    </body>

    </html>