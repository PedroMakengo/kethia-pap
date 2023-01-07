<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Sistema PAP</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="../assets/fonts/font-awesome-4.7/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="../assets/fonts/font-awesome-5/css/fontawesome-all.min.css"
    />
    <!-- Bootstrap CSS-->
    <link
      href="../assets/vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link
      href="../assets/styles/theme/theme.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Animações -->
    <link rel="stylesheet" href="../assets/styles/theme/aos.css" />

    <link rel="stylesheet" href="../assets/styles/dashboard.css" />
    <style></style>
  </head>
  <body class="">
    <div class="page-wrapper">
      <!-- Header -->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a class="logo" href="index.html">
                <img src="images/icon/logo.png" alt="CoolAdmin" />
              </a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li>
                <a href="home.html"> <i class="fas fa-home"></i>Home</a>
              </li>
              <li>
                <a href="database.html">
                  <i class="fas fa-table"></i>Databases</a
                >
              </li>
              <li>
                <a href="providers.html">
                  <i class="far fa-check-square"></i>Providers</a
                >
              </li>
              <li>
                <a href="schedules.html">
                  <i class="fas fa-calendar-alt"></i>Schedules</a
                >
              </li>
              <li>
                <a href="../index.html">
                  <i class="fas fa-map-marker-alt"></i>Sair</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="dash-aside-bg">
          <a href="#" class="text-white">PAINEL DE CONTROLO</a>
        </div>
        <div class="menu-sidebar__content">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li>
                <a href="index.html"> <i class="fas fa-home"></i>Home</a>
              </li>
              <li>
                <a href="posto.html">
                  <i class="fas fa-car"></i>Posto Identificação</a
                >
              </li>
              <li class="active">
                <a href="agendamento.html">
                  <i class="fas fa-address-book"></i>Agendamentos</a
                >
              </li>
              <li>
                <a href="users.html"> <i class="fas fa-users"></i>Usuários</a>
              </li>
              <li>
                <a href="f"> <i class="fas fa-power-off"></i>Terminar Sessão</a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!-- Header -->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- Header -->
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-right">
                <div class="display-avatar">
                  <a href="#" class="perfil-avatar">
                    <img src="../assets/images/avatar.jpg" alt="" />
                    <p>Vuvu Pereira</p>
                  </a>
                  <div class="info-logout">
                    <a href="#"> <i class="fas fa-power-off"></i> Sair</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Header -->
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div
            class="section__content section__content--p30"
            style="margin-top: -200px"
          >
            <div class="container-fluid">
              <div class="row mt-4">
                <div class="col-lg-12 col-xl-12 col-sm-12">
                  <div class="rounded p-4 borda-top">
                    <h1 class="title">Tabela Geral de Agendamento.</h1>
                    <hr />

                    <!-- Colocar aqui tabela -->
                    <div class="table-responsive">
                      <table class="table" id="dataGeral" style="width: 1120px">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Bilhete de Identidade</th>
                            <th>Telefone</th>
                            <th>Genero</th>
                            <th>Data registro</th>
                            <th class="text-center">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Teste</td>
                            <td>Teste</td>
                            <td>Teste</td>
                            <td>Teste</td>
                            <td>Teste</td>
                            <td>
                              <a
                                class="btn btn-primary btn-sm"
                                href="perfil-usuario.php?id=<?= $mostrarCliente['id_cliente'] ?>"
                              >
                                <i class="fas fa-eye"></i>
                              </a>
                              <a
                                href="clientes.php?action=delete&id=<?= $mostrarCliente['id_cliente']?>"
                                class="btn btn-danger btn-sm"
                              >
                                <i class="fas fa-trash"></i>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- Colocar aqui tabela -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <!-- Jquery JS-->
  <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->

  <script src="../assets/scripts/Chart.min.js"></script>

  <script src="../assets/scripts/theme/main.js"></script>
</html>
