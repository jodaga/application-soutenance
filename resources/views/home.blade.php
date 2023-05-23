<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>App-Students | Dashboard</title>
  <link rel="icon" href="dist/img/logoAppStudent.png" type="image/png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/styles.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini">
    <div id="app">
        

        <main class="py">
            @yield('content')
        </main>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logoAppStudent.png" alt="logoAppStudent" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">  
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/pages/examples/contact-us" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
    </ul>

    <!-- Right navbar links -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            
        </nav>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 fixed">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="dist/img/logoAppStudent.png" alt="logoAppStudent" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">App-Students</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/home" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
              Acceuil
                
              </p>
            </a>
            
          </li>
      
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pages/forms/general" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pages/forms/advanced" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pages/forms/validation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Mes Resultats
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pages/tables/simple" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programmation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pages/tables/data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bulletins</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="/pages/calendar" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pages/mailbox/mailbox" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pages/mailbox/compose" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reclammation</p>
                </a>
              </li>
              
            </ul>
          </li>
         
         
          <li class="nav-item">
            
              <a href="/pages/examples/contact-us" class="nav-link">
                <i class="nav-icon far fa-address-book"></i>
                <p>Contact us</p>
              </a>
            </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Mon compte
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/auth/login" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
                
              <li class="nav-item">
                <a href="/auth/register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>

             
              <li class="nav-item">
                <a href="/password/reset" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              

      
            </ul>
          </li>


          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pages/search/simple" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pages/search/enhanced" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="slider-area">
			<div class="single-slider ptb-150 bg-darkblue" style="background-image:url(img/slider/2.jpg); background-color: blue;">
				<div class="container">
					<div class="slider-text text-center">
						<h3> 
							<span>BIENVENUE SUR App-Students</span>
						</h3>
						<p>Bienvenue sur notre application de consultation et de retrait de bulletins de notes ! Accédez facilement à vos résultats scolaires et récupérez-les en quelques clics. Profitez de notre plateforme conviviale pour suivre votre parcours académique avec simplicité. Nous sommes ravis de vous avoir parmi nous !</p>
					</div>
				</div>
			</div>
		</div>
		<!-- slider-area-start -->


		<!-- features-area-start -->
		<div class="features-area pt-80 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-features text-center mb-30">
							<div class="icon-box">
								<i class="fa fa-paper-plane"></i>
							</div>
							<h5>A-PROPOS</h5>
							<p> 
                <ul>
                  <li>Notre mission : Faciliter l'accès aux bulletins de notes pour les étudiants et les parents afin de favoriser le suivi de la progression scolaire.</li>
                  <li>Confidentialité et sécurité : Nous accordons une grande importance à la confidentialité de vos données et mettons en place des mesures de sécurité robustes pour protéger vos informations personnelles.</li>
                </ul>
              </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-features text-center mb-30">
							<div class="icon-box">
								<i class="fa fa-check-square"></i>
							</div>
							<h5>OBJECTIFS ?</h5>
              <p>
                <ul>
                  <li>Consultation facile des bulletins de notes : Accédez rapidement à vos résultats scolaires à tout moment et n'importe où.</li>
                  <li>Retrait simplifié des bulletins de notes : Téléchargez et enregistrez facilement vos bulletins pour une consultation ultérieure.</li>
                  <li>Suivez vos performances scolaires au fil du temps et identifiez les domaines à améliorer.</li>
                </ul>
              </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-features text-center mb-30">
							<div class="icon-box">
								<i class="fas fa-info-circle"></i>
							</div>
							<h5>COMMENT SA FONCTIONNE ?</h5>
              <p>
                <ul>
                  <li>Connexion sécurisée : Créez un compte ou connectez-vous en toute sécurité avec vos identifiants d'étudiant.</li>
                  <li>Accédez à vos bulletins de notes : Consultez vos résultats classés par année scolaire et matières.</li>
                  <li>Téléchargement des bulletins : Téléchargez les bulletins de notes au format PDF pour les enregistrer sur votre appareil</li>
                </ul>
              </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- features-area-end -->

		<!-- subscribe-area-start -->
	
		<!-- subscribe-area-end -->

		<!-- courses-area-start -->
		
	
  </div>
  <!-- /.content-wrapper -->


  
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2020-2023 <a href="/">App-Students</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
    </div>
</body>
</html>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>