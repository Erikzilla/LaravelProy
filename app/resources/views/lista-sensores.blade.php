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

    <title>Lista de sensores</title>

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
                <p>Estatus: No registrado</p>
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

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                  
        
                    
              
              <!-- /Search -->

            
                
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->


          <!---Lista de usuarios---> 
          <style>
            .table-custom {
                background-color: #317dd4;
                color: #fff;
            }
            .table-custom .btn {
                padding: 5px 10px; /* Espaciado interno de los botones */
            }
        
            .table-custom .update {
                background-color: #e1eb1d; /* Color de fondo del botón Update */
                color: #fff;
            }
        
            .table-custom .update:hover {
                background-color: #c1ca17; /* Color de fondo al pasar el cursor por encima */
            }
        
            .table-custom .delete {
                background-color: #e74c3c; /* Color de fondo del botón Delete */
                color: #fff;
            }
        
            .table-custom .delete:hover {
                background-color: #d62c1f; /* Color de fondo al pasar el cursor por encima */
            }
            
            /* switch estilos */
            .switch {
              position: relative;
              display: inline-block;
              width: 60px;
              height: 34px;
            }

            .switch input[type="checkbox"] {
              display: none;
            }

            .slider {
              position: absolute;
              cursor: pointer;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              background-color: #ccc;
              -webkit-transition: .4s;
              transition: .4s;
              border-radius: 34px;
            }

            .slider:before {
              position: absolute;
              content: "";
              height: 26px;
              width: 26px;
              left: 4px;
              bottom: 4px;
              background-color: white;
              -webkit-transition: .4s;
              transition: .4s;
              border-radius: 50%;
            }


            input[type="checkbox"]:checked + .slider {
              background-color: #2753a4;
            }


            input[type="checkbox"]:checked + .slider:before {
              -webkit-transform: translateX(26px);
              -ms-transform: translateX(26px);
              transform: translateX(26px);
            }
        </style>
        
        <div class="card-body d-flex align-items-center justify-content-center">
          <h2 class="card-title text-primary">Lista De Sensores</h2>
      </div>
      
      @auth
      <table class="table table-striped table-hover table-custom" style="background-color: #87CEEB; margin-bottom: 550px;">
            <thead>
              <tr>
                <th scope="col">sensor_id</th>
                <th scope="col">name_sensor</th>
                <th scope="col">Location</th>
                <th scope="col">Temperatura Maxima(°C)⬆️</th>  
                <th scope="col">Temperatura Minima(°C)⬇️</th>     
                <th scope="col">Humedad Minima(%)⬆️</th>   
                <th scope="col">Humedad Maxima(%)⬇️</th>   
                <th scope="col">Status</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

                @foreach($sensors as $index => $sensor)
                <tr>
                  <th scope="row">{{$index}}</th>
                  <td>{{$sensor['name']}}</td>
                  <td>{{$sensor['location']}}</td>
                  <td>{{$sensor['maxTemp']}} °C</td>
                  <td>{{$sensor['minTemp']}} °C</td>
                  <td>{{$sensor['maxHum']}} %</td>
                  <td>{{$sensor['minHum']}} %</td>


                  <td><label class="switch">
                  <?php if ($sensor['state']=="active") { ?>
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                  <?php } else { ?>
                    <input type="checkbox">
                    <span class="slider"></span>
                  <?php } ?>
                  </label></td>
                  <td> 
                    <button class="update "type="submit">Update</button>                     
                    <button class="delete" type="submit">Delete</button> 
                  </td>
                </tr>
                @endforeach

            </tbody>
      
          <!---/Lista de usuarios---> 
      </table>
      @else
        <p>Necesitas estar registrado</p>
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
