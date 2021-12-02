<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Montserrat:wght@100;200;300;400;500&family=Parisienne&display=swap"
        rel="stylesheet">

    <title>Dashboard - Novo Serviço</title>
</head>

<body>
    <!--Dashboard-->
    <div id="containerDashboard" class="container-fluid">
        <div class="row">
            <!--Navbar left-->
            <div id="navbarDash"
                class="col-12  col-md-2 col-lg-2 col-xl-2 sticky-top bg-dark d-flex justify-content-center">
                <ul class="nav">
                    <!--imgLogoDash-->
                    <li id="imgLogoHome" class="nav-item">
                        <a href="/view/personnaliteArua/home.html" class="text-decoration-none fs-3">
                            <img src="/assets/Logos/Img_Logo_Padrao.png" alt="Img_Logo_Padrao" class="img-fluid">
                            <span class=" text-center d-none d-xl-block">Home</span>
                        </a>
                    </li>
                    <!--imgLogoDash-->

                    <!--Agenda-item-->
                    <li class="nav-item ">
                        <a href="dashboard-agenda.html" class="text-decoration-none fs-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span class="d-none d-xl-inline-block">Agenda</span>
                        </a>
                    </li>
                    <!--Agenda-item-->

                    <!--Serviço-item-->
                    <li class="nav-item">
                        <a href="dashboard-servico.html" class="text-decoration-none fs-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-scissors" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                            </svg>
                            <span class="d-none d-xl-inline-block">Serviços</span>
                        </a>
                    </li>
                    <!--Serviço-item-->
                </ul>
            </div>
            <!--Navbar left-->

            <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                <!--title-->
                <div class="row pt-5 px-5">
                    <h1 class="title-dash">Novo Serviço</h1>
                </div>
                <!--title-->

                <!--imgLogoPng-->
                <div class="imgLogoNewServico">
                    <img src="/assets/Logos/Img_Logo.png" alt="Img_Logo_png">
                </div>
                <!--imgLogoPng-->

                <!--Form New Serviço-->
                <div id="formServico">
                    <form action="" method="post" class="border border-dark">
                        <label for="labelNome" class="form-label">Nome</label>
                        <p><input type="text" name="" id="labelNome" class="input"></p>

                        <label for="labelTempo" class="form-label">Tempo Estimado</label>
                        <p><input type="text" name="" id="labelTempo" class="input"></p>

                        <label for="labelValor" class="form-label">Valor</label>
                        <p><input type="text" name="" id="labelValor" class="input"></p>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark" id="btnCadastar">Cadastrar</button>
                        </div>
                    </form>
                </div>
                <!--Form New Serviço-->
            </div>
        </div>
    </div>
    <!--Dashboard-->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>