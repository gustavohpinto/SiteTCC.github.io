<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Ico -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png"> -->

    <!-- Bootstrap e CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!--Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <title>Beesiness</title>
</head>

<body>
    <?php 
    include 'verificador.php';
    ?>
    <!-- Navbar -->
    <nav class="navbar navbar fixed-top navbar-expand-lg navbar navbar-dark bg-purple text-dark">
        <a class="navbar-brand" href="#"> <img id="logo" src="./img/logo.png"></a>
        <!-- Nome do NAvbar que pode ser trocada por um Icon-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Itens do Navbar -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link cor-home beesiness" href="#">Beesiness<span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sobre o Projeto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#edFin">A Educação Financeira</a>
                        <a class="dropdown-item" href="#bee">As abelhas</a>
                        <a class="dropdown-item" href="#facaParte">Faça Parte</a>

                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link cor-home" href="#">Equipe <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link espacoLogin btn btn-outline-success" href="logout.php">Sair<span class="sr-only"></span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Mais No</a>
                </li>  Disable-->
            </ul>
        </div>
    </nav>
    <br>
    <br>
    
    <br>

    <section class="espaco" style="padding-top: 5%; padding-bottom: 15%; padding-right: 20%; padding-left: 20%; align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="card">
                            <form action="insere_gasto.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="card-header">
                                    <strong class="card-title">Ganhos</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <tbody>

                                            <!--  LINHA 97 -> Recebe o código do usuário através da section MUDAR
                                                  Linha 102 -> consulta usando o código de possui ganhos
                                            -->
                                            <tr>
                                                <td>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Valor</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="number" id="number-input" name="valor" placeholder="99.1" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="data-input" class=" form-control-label">Data</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="date" id="data-input" name="data" placeholder="Data de Nascimento" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-header">
                                    <input type="submit" name="" class="btn btn-success" value="Inserir">
                                </div>

                            </form>
                    </div>
                </div>
                
            </div>
        </div>

    </section>

    <!-- Home / Educação Financiera -->
    


    <!-- Forms Contato -->

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white-50 p-4">
        <div class="footer-copyright text-center py-3">&copy;2021 - Desenvolvido por Beesiness
        </div>
        <!-- Copyright -->

    </footer>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/counterup.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>

</body>

</html>