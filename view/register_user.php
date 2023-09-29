<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crear Usuario</title>
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
  <link rel="stylesheet" href="css/create_user.css">

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
        <a class="nav-link" data-bs-target="#forms-nav" href="?page=main">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"data-bs-toggle="collapse" href="#solicitud-nav" role="button" aria-expanded="false" aria-controls="solicitud-nav">
          <i class="bi bi-journal-text"></i><span>Solicitudes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="solicitud-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a href="?page=servicio" class="nav-link collapsed">
              <i class="bi bi-circle"></i><span>Servicio Técnico</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=electronica" class="nav-link collapsed">
              <i class="bi bi-circle"></i><span>Electrónica</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=telefonia" class="nav-link collapsed">
              <i class="bi bi-circle"></i><span>Telefonía</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=redes" class="nav-link collapsed">
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
      <h1>Creción de Usuarios</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Creación de Usuarios</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nuevo Usuario</h5>

              <!-- cargo,condicion laboral, Departamento/Dependencia(unidad o area),  -->

              <form method="post" class="row g-3 needs-validation">
                <div class="col-sm-6">
                  <label for="Name" class="form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="Name" required>
                  <div class="invalid-feedback">Ingresa un nombre!</div>
                </div>
                <div class="col-sm-6">
                  <label for="Lastname" class="form-label">Apellido</label>
                  <input type="text" name="apellido" class="form-control" id="Lastname" required>
                  <div class="invalid-feedback">Ingresa un apellido!</div>
                </div>
                <div class="col-sm-4">
                  <label for="DNI" class="form-label">Cedula</label>
                  <input type="text" name="cedula" class="form-control" id="DNI" required>
                  <div class="invalid-feedback">Ingresa una cedula!</div>
                </div>
                <div class="col-sm-8">
                  <label for="Email" class="form-label">Correo</label>
                  <input type="email" name="correo" class="form-control" id="Email" required>
                  <div class="invalid-feedback">Ingresa un correo valido!</div>
                </div>
                <div class="col-sm-2">
                  <label for="Born" class="form-label">Nacimiento</label>
                  <input type="date" name="fecha_nac" class="form-control" id="Born" required>
                  <div class="invalid-feedback">Ingresa una fecha!</div>
                </div>
                <div class="col-sm-5">
                  <label for="Photo" class="form-label">Foto</label>
                  <div>
                    <input class="form-control" type="file" id="Photo" name="foto">
                  </div>
                </div>
                <div class="col-sm-5">
                  <label for="number" class="form-label">Número de Teléfono</label>
                  <div class="input-group" id="number">
                    <span class="input-group-text" id="basic-addon3">
                      <select name="particle" id="num" required>
                        <option></option>
                        <option value="0412">0412</option>
                        <option value="0414">0414</option>
                        <option value="0424">0424</option>
                        <option value="0416">0416</option>
                        <option value="0416">0426</option>
                      </select>
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon3" name="telefono" required>
                    <div class="invalid-feedback">Ingresa un numero de teléfono!</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <label for="Cargo" class="form-label">Cargo</label>
                  <input type="text" name="Cargo" class="form-control" id="Cargo" required>
                  <div class="invalid-feedback">Ingresa un cargo!</div>
                </div>
                <div class="col-sm-3">
                  <label for="Condicion" class="form-label">Condicion Laboral</label>
                  <select name="Condicion_l" class="form-select" required>
                    <option>Seleccionar</option>
                    <option value="Contratado">Contratado</option>
                    <option value="Pasante">Pasante</option>
                  </select>
                  <div class="invalid-feedback">Selecciona una condición!</div>
                </div>
                <div class="col-sm-3">
                  <label for="D/A" class="form-label">Departamento/Área</label>
                  <input type="text" name="Area" class="form-control" id="Condicion" required>
                  <div class="invalid-feedback">Selecciona un departamento o área!</div>
                </div>
                <div class="col-sm-3">
                  <label for="Rol" class="form-label">Rol</label>
                  <select name="Rol" class="form-select" required>
                    <option>Seleccionar</option>
                    <option></option>
                    <option value="Trabajador">Trabajador</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Técnico">Técnico</option>
                    <option value="Superusuario">Super Usuaio</option>
                  </select>
                  <div class="invalid-feedback">Seleccional un rol!</div>
                </div>
                <div class="col-sm-5">
                  <label for="Username" class="form-label">Usuario</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="Nombre_usuario" class="form-control" id="Username"required>
                    <div class="invalid-feedback">Ingresa un usuario!</div>
                  </div>
                </div>

                <div class="col-sm-5">
                  <label for="Password" class="form-label">Contraseña</label>
                  <input type="password" name="Contraseña" class="form-control" id="Password" required>
                  <div class="invalid-feedback">Ingresa una contraseña valida!</div>
                </div>

                <!-- <div class="col-12"></div> -->

                <div class="col-sm-2 mt-sm-5">
                  <button class="btn btn-primary w-100" type="submit" name="enviar">Crear</button>
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
      &copy; Copyright <strong><span>Gobernación de Lara</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
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