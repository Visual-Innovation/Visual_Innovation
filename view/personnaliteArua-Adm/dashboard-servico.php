<?php
require_once '../../model/Servicos.php';
$s = new Servico;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">

    <title>Dashboard</title>
</head>

<body>
    <?php /*
    if (isset($_POST['nome'])) //CLICOU NO BOTÃO CADASTRAR OU EDITAR
    {
        //---------------------EDITAR-----------------------------//
        if (isset($_GET['codServico']) && !empty($_GET['codServico'])) {
            $id_upd = addslashes($_GET['codServico']);
            $nome = addslashes($_POST['nome']);
            $tempoEstimado = addslashes($_POST['tempoEstimado']);
            $valor = addslashes($_POST['valor']);
            if (!empty($nome) && !empty($tempoEstimado) && !empty($valor)) {
                //EDITAR
                $s->atualizarDados($id_upd, $nome, $tempoEstimado, $valor);
            } else {
    ?>
                <div class="aviso">
                    <h4>Preencha todos os campos</h4>
                </div>*/
    ?>
    <?php
    //}
    // }
    // }
    if (isset($_GET['codServico'])) { //SE O USUÁRIO CLICOU NO BOTÃO EDITAR
        $id_update  = addslashes($_GET['codServico']);
        $res = $s->buscarDadosServico($id_update);
    }
    ?>
    <!--Dashboard-->
    <div id="containerDashboard" class="container-fluid">
        <div class="row">
            <div id="navbarm" class="col-12  col-md-2 col-lg-2 col-xl-2 sticky-top bg-dark d-flex justify-content-center">
                <ul class="nav ">
                    <li id="imgLogoHome" class="nav-item">
                        <a href="../../view/personnaliteArua/home.php" class="text-decoration-none fs-3">
                            <img src="../../assets/Logos/Arua_logo_padrao.png" alt="Logo" class="img-fluid">
                            <span class=" text-center d-none d-xl-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="dashboard-agenda.php" class="text-decoration-none fs-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span class="d-none d-xl-inline-block">Agenda</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dashboard-servico.php" class="text-decoration-none fs-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16">
                                <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                            </svg>
                            <span class="d-none d-xl-inline-block">Serviços</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--Navbar left-->

            <!--Serviço-->
            <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                <div class="row pt-5 px-5">
                    <h1>Serviços</h1>
                </div>

                <!--CardServicos-->
                <div class="row pt-5 px-5">
                    <div class="col d-flex justify-content-center">
                        <div id="cardServicosDash" class="card bg-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center  ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors icons" viewBox="0 0 16 16">
                                        <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                                    </svg>
                                </div>
                                <div id="conteudo" class="">
                                    <h2 class="text-center text-white">Total</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CardServicos-->

                <!--table-->
                <div class=" border border-dark mt-5">
                    <div class=" d-flex justify-content-end align-items-center">
                        <a href="dashboard-newservico.php">
                            <button type="submit" id="btnCadastar" class="btn btn-dark">Novo Serviço</button>
                        </a>
                    </div>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Tempo</th>
                                <th scope="col">valor</th>
                                <th scope="col">Data</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <?php
                        $dados = $s->buscarDados();
                        if (count($dados) > 0) { // Tem Pessoas cadastradas no banco 
                            for ($i = 0; $i < count($dados); $i++) {
                                echo "<tr>";
                                foreach ($dados[$i] as $k => $v) {
                                    if ($k != 'codServico') {
                                        echo "<td>" . $v . "</td>";
                                    }
                                }
                        ?>
                                <td>
                                    <a href="dashboard-newservico.php?codServico=<?php echo $dados[$i]['codServico']; ?>" class="btn btn-warning text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                    <a href="dashboard-servico.php?codServico=<?php echo $dados[$i]['codServico']; ?>" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg>
                                    </a>
                                </td>
                            <?php
                                echo "</tr>";
                            }
                        } else {
                            ?>
                    </table>
                    <div class="aviso">
                        <h4>Ainda não há Serviços cadastrados!</h4>
                    </div>
                <?php
                        }
                ?>
                </div>
                <!--table-->
            </div>
            <!--Serviço-->
        </div>
    </div>
    <!--Dashboard-->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>

<?php
if (isset($_GET['codServico'])) {
    $id_servico = addslashes($_GET['codServico']);
    $s->excluirServico($id_servico);
    echo "<script>self.location.href='dashboard-servico.php'</script>";
}
?>