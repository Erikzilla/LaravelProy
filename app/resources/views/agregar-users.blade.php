<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>User</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                  
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                        
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">laravel-flask</span>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <h5 class="card-title text-primary text-center">Welcome Admin!✅🎉</h4>
          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
          
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{url('/lista-users')}}" class="menu-link">
              
                <div data-i18n="Analytics">🟰 Lista De Usuarios</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{url('/lista-sensores')}}" class="menu-link">
                <div data-i18n="Notifications">🟰 Lista De Sensores</div>
              </a>

                <li class="menu-item">
                  <a href="{{url('/agregar-users')}}" class="menu-link">
                    <div data-i18n="Account">➕ Agregar Usuarios</div>
                  </a>
                </li>
              </li>

              <li class="menu-item active">
                <a href="{{url('/agregar-sensores')}}" class="menu-link">
                  <div data-i18n="Connections">➕ Agregar Sensores</div>
                </a>
              
          

                  <li class="menu-item">
                    <a href="{{url('/registro-historico')}}" class="menu-link">
                      <div data-i18n="Connections">🟰 Registro Historico</div>
                    </a>

                    <li class="menu-item">
                      <a href="{{url('/notificaciones')}}" class="menu-link">
                        <div data-i18n="Connections">🟰 Notificaciones</div>
                      </a>


                  </li>
              </ul>
            </li>    
              <!-- Final Dashboard -->




              @auth
              <div class="container mt-5">
                <!-- Utiliza las clases 'text-center' y 'd-flex justify-content-center' para centrar el botón horizontalmente -->
                  <div class="text-center d-flex justify-content-center">
                      <form action="/logout" method="POST">
                        @csrf
                        <button>Logout</button>
                      </form>
                  </div>
              </div>
              @else
              @endauth
        </aside>
        <!-- / Menu -->
        <style>
          /* Estilos para el contenedor */
          .custom-container {
              background-color: #f8f9fa;
              height: 100vh; /* Altura del contenedor */
              display: flex;
              flex-direction: column; /* Alinear elementos verticalmente */
              justify-content: center;
              align-items: center;
          }
  
          /* Estilos para el botón */
          .custom-btn {
              background-color: #007bff; /* Color de fondo */
              color: #ffffff; /* Color del texto */
              border: none; /* Sin borde */
              padding: 10px 20px; /* Espaciado interno */
              font-size: 18px; /* Tamaño del texto */
              border-radius: 5px; /* Bordes redondeados */
              text-decoration: none; /* Sin subrayado */
              transition: background-color 0.3s ease; /* Transición suave del color de fondo */
              margin-top: 0px; /* Margen superior para separar el botón del borde superior del contenedor */
          }
  
          /* Cambia el color de fondo cuando el cursor está sobre el botón */
          .custom-btn:hover {
              background-color: #0056b3;
          }
      </style>
        
        

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

      
          <div class="content-wrapper">
     
          @auth
            <p>Estatus: Registrado</p>
          @else
            <p>Estatus: No registrado</p>
            <!---formulario de usuarios---> 
            <div class="container mt-5">
              <div class="row justify-content-center">
                  <div class="col-md-6">
                      <form action="/registerUser" method="POST">
                        @csrf
                          <div class="card-body text-center">
                              <h2 class="card-title text-primary">Agregar Usuarios</h2>
                          </div>
                          <div class="form-group">
                              <label for="inputUsername">Username</label>
                              <input name="name" type="text" class="form-control" placeholder="Username" id="inputUsername">
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <label for="inputPassword">Password</label>
                              <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                          </div>
                          <div class="form-group">
                              <label for="inputRol">Rol</label>
                              <select name="role" class="form-control" id="inputRol">
                                  <option value="user">User</option>
                                  <option value="admin">Admin</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="inputEstado">Estado</label>
                              <select name="state" class="form-control" id="inputEstado">
                                  <option value="active">Active</option>
                                  <option value="inactive">Inactive</option>
                              </select>
                          </div>
                          <div class="botton-agregar d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          <styles>

          </styles>

            <!---formulario de usuarios--->

            <!---formulario de entrada---> 

            <div class="container mt-5">
              <div class="row justify-content-center">
                  <div class="col-md-6">
                      <form action="/login" method="POST">
                        @csrf
                          <div class="card-body text-center">
                              <h2 class="card-title text-primary">Entrar</h2>
                          </div>
                          <div class="form-group">
                              <label for="inputUsername">Username</label>
                              <input name="loginName" type="text" class="form-control" placeholder="Username" id="inputUsername">
                          </div>
                          <div class="form-group">
                              <label for="inputPassword">Password</label>
                              <input name="loginPassword" type="password" class="form-control" id="inputPassword" placeholder="Password">
                          </div>
                          <div class="botton-agregar d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          <styles>

          </styles>
            <!---formulario de entrada--->



                    
          @endauth

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
