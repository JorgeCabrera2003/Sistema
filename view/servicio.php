<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Servicio Técnico</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <link href="css/servicios.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="?page=main" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="">
        <span class="d-none d-lg-block">OFITIC</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Servicio Técnico</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="?page=usuario">
                <i class="bi bi-person"></i>
                <span>Mi Perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="?page=login">
                <i class="bi bi-box-arrow-right"></i>
                <span>Salir</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="?page=main">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link"data-bs-toggle="collapse" href="#solicitud-nav" role="button" aria-expanded="false" aria-controls="solicitud-nav">
          <i class="bi bi-journal-text"></i><span>Solicitudes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="solicitud-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a href="?page=servicio" class="active">
              <i class="bi bi-circle"></i><span>Servicio Técnico</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=electronica">
              <i class="bi bi-circle"></i><span>Electrónica</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=telefonia">
              <i class="bi bi-circle"></i><span>Telefonía</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=redes">
              <i class="bi bi-circle"></i><span>Redes</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=register_user">
          <i class="bi bi-card-list"></i><span>Crear usuario</span>
        </a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=users-profile">
          <i class="bi bi-person"></i>
          <span>Perfil</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Servicio Técnico</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=main">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Solicitudes</a></li>
          <li class="breadcrumb-item active">Servicio Técnico</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Servicio</h5>

              <!-- cargo,condicion laboral, Departamento/Dependencia(unidad o area),  -->

              <form method="post" class="row g-3 needs-validation">
              <div class="col-sm-3">
                  <label for="fecha" class="form-label">fecha</label>
                  <input type="date" name="Fecha" class="form-control" id="fecha" required>
                  <div class="invalid-feedback">Ingresa la fecha!</div>
                </div>
                <div class="col-sm-3">
                  <label for="fecha" class="form-label">Numero Solicitud de Servicio</label>
                  <input type="text" name="Solicitud" class="form-control" id="solicitud" required>
                  <div class="invalid-feedback">Ingresa la Solicitud del servicio!</div>
                </div>
                <div class="col-sm-3">
                  <label for="oficio" class="form-label">Numero de Oficio</label>
                  <input type="text" name="Oficio" class="form-control" id="oficio" required>
                  <div class="invalid-feedback">Ingresa el numero de ofico!</div>
                </div>
                <div class="col-sm-3">
                  <label for="Call" class="form-label">Llamada</label>
                  <input type="text" name="Llamada" class="form-control" id="llamada" required>
                  <div class="invalid-feedback">Ingresa el numero de la llamada!</div>
                </div>
                <div class="col-sm-6">
                  <label for="dependencia" class="form-label">Dependencia</label>
                  <input type="text" name="Dependencia" class="form-control" id="dependencia" required>
                  <div class="invalid-feedback">Ingresa la dependencia solicitada!</div>
                </div>
                <div class="col-sm-4">
                  <label for="ente" class="form-label">Ente</label><br>
                  <label for="ente" class="form-label">Interno</label><input type="radio" name="ente" id="interno" required> 
                  <label for="ente" class="form-label">Externo</label><input type="radio" name="ente" id="externo" required>
                  <div class="invalid-feedback">Seleccione el campo!</div>
                </div>

                <div class="row my-4">
                  <div>
                    <h5 class="col-sm-12">Componentes Internos</h5>
                  </div>

                  <div class="col-sm-3">
                    <div class="col-1">
                      <label for="mr" class="form-label">Memoria RAM</label>
                    </div>
                    <div class="col-2">
                      <input type="checkbox" name="mr" id="mr">
                    </div>
                  </div>
                  
                  <div class="col-sm-3">
                    <div class="col-6">
                      <label for="dd" class="form-label">Disco Duro</label>
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="dd" id="dd">
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="col-6">
                      <label for="tm" class="form-label">Tarjeta Madre</label>
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="tm" id="tm">
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="col-6">
                      <label for="tp" class="form-label">fuente de Poder</label>
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="tp" id="tp">
                    </div>
                  </div>

                  <div class="col-2">
                    <label for="tr" class="form-label">Tarjeta de Red</label>
                  </div>
                  <div class="col-1">
                    <input type="checkbox" name="tr" id="tr">
                  </div>
                  <div class="col-2">
                    <label for="tv" class="form-label">Tarjeta de Video</label>
                  </div>
                  <div class="col-1">
                    <input type="checkbox" name="tv" id="tv">
                  </div>
                  <div class="col-2">
                    <label for="pro" class="form-label">Procesador</label>
                  </div>
                  <div class="col-1">
                    <input type="checkbox" name="pro" id="pro">
                  </div>
                  <div class="col-sm-2">
                    <label for="otro" class="form-label">Otro</label>
                  </div>
                  <div class="col-1">
                    <input type="checkbox" name="otro" id="otro">
                  </div>

                  <div class="invalid-feedback">Ingresa la check!</div>
                </div>
                <div class="col-sm-2 mt-sm-5">
                  <button class="btn btn-primary w-100" type="submit">Crear</button>
                </div>
              </form>
              
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Gobernación del estado Lara</span></strong>. All Rights Reserved
    </div>
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>