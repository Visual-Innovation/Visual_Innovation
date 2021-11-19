<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">

    <title>Dashboard - Agenda</title>
</head>

<body>
    <!--Dashboard-->
    <div id="containerDashboard" class="container-fluid">
        <div class="row">
       <!--Navbar left-->
       <div id="navbarm"
       class="col-12  col-md-2 col-lg-2 col-xl-2 sticky-top bg-dark d-flex justify-content-center">
           <ul class="nav ">
               <li id="imgLogoHome" class="nav-item">
                   <a href="../../view/personnaliteArua/home.php" class="text-decoration-none fs-3">
                       <img src="../../assets/Logos/Arua_logo_padrao.png" alt="Logo" class="img-fluid">
                       <span class=" text-center d-none d-xl-block">Home</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="dashboard.php" class="text-decoration-none fs-3">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-speedometer2" viewBox="0 0 16 16">
                           <path
                               d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                           <path fill-rule="evenodd"
                               d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                       </svg>
                       <span class="d-none d-xl-inline-block">Dashboard</span>
                   </a>
               </li>
               <li class="nav-item ">
                   <a href="dashboard-agenda.php" class="text-decoration-none fs-3">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-calendar-fill" viewBox="0 0 16 16">
                           <path
                               d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z" />
                       </svg>
                       <span class="d-none d-xl-inline-block">Agenda</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="dashboard-servico.php" class="text-decoration-none fs-3">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-scissors" viewBox="0 0 16 16">
                           <path
                               d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                       </svg>
                       <span class="d-none d-xl-inline-block">Serviços</span>
                   </a>
               </li>     
           </ul>
   </div>
   <!--Navbar left-->

            <!--Agenda-->
            <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                <div class="row pt-5 px-5">
                    <h1>Agenda</h1>
                </div>

                <!--Conteudo Agenda-->
                <div class="row pt-5 px-5">
                    <!--CardNext-->
                    <div class="col-12 col-lg-4">
                        <div id="cardNext" class="card bg-danger">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4  d-flex justify-content-center align-items-center  ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-fill icons" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div id="conteudo" class="col-8 ">
                                        <h2 class="text-center text-white">Próximo</h2>
                                        <h6 class="text-center text-white">02/02/02 10:00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CardNext-->

                    <!--CardTotal-->
                    <div class="col-12 col-lg-4">
                        <div id="cardTotal" class="card bg-warning">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-week-fill icons" viewBox="0 0 16
                                            16">
                                            <path
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <div id="conteudo" class="col-8">
                                        <h2 class="text-center text-white">5</h2>
                                        <h5 class="text-center text-white">Agendados</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CardTotal-->

                    <!--CardCheck-->
                    <div class="col-12 col-lg-4">
                        <div id="cardCheck" class="card bg-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-check-fill icons" viewBox="0 0 16
                                            16">
                                            <path
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                        </svg>
                                    </div>
                                    <div id="conteudo" class="col-8">
                                        <h2 class="text-center text-white">2</h2>
                                        <h5 class="text-center text-white">Marcados</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CardCheck-->

                </div>
                <!--Conteudo Agenda-->
                <div class=" border border-dark mt-5">
                    <div class=" d-flex justify-content-end align-items-center">
                    </div>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Cliente</th>
                                <th scope="col">Serviço</th>
                                <th scope="col">Data</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!--Agenda-->
        </div>
    </div>
    <!--Dashboard-->






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>