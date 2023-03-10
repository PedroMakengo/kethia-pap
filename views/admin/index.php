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
              <li class="active">
                <a href="index.html"> <i class="fas fa-home"></i>Home</a>
              </li>
              <li>
                <a href="posto.html">
                  <i class="fas fa-car"></i>Posto Identificação</a
                >
              </li>
              <li>
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
                <div class="col-md-4 col-lg-4">
                  <div class="rounded p-4 borda-top">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="borda-icons shadow">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>2</h3>
                        <span>Postos</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-4">
                  <div class="rounded p-4 borda-top">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="borda-icons shadow">
                          <i class="fas fa-database"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>3</h3>
                        <span>Agendamento</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-4">
                  <div class="rounded p-4 borda-top">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="borda-icons shadow">
                          <i class="fas fa-car"></i>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <h3>5</h3>
                        <span>Usuários</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col-lg-12 col-xl-12 col-sm-12">
                  <div class="rounded p-4 borda-top">
                    <h1 class="title">Gráfico Mensal de Solicitações</h1>
                    <hr />
                    <div class="charts mt-2">
                      <canvas
                        id="mycompra-chart"
                        style="height: 250px"
                      ></canvas>
                    </div>
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

  <script>
    $(function () {
      // Trabalhar nos gráficos
      var lineChart = document
        .getElementById("mycompra-chart")
        .getContext("2d");
      var myLineChart = new Chart(lineChart, {
        type: "line",
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "Solicitação de agendamento",
              borderColor: "#a13529",
              pointBorderColor: "#a13529",
              pointBackgroundColor: "#a13529",
              pointBorderWidth: 2,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 1,
              pointRadius: 4,
              backgroundColor: "transparent",
              fill: true,
              borderWidth: 2,
              data: [10, 20, 10],
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            position: "bottom",
            labels: {
              padding: 10,
              fontColor: "#1f6feb",
            },
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10,
          },
          layout: {
            padding: { left: 15, right: 15, top: 15, bottom: 15 },
          },
        },
      });
    });
  </script>
</html>
