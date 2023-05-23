<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App-Students | Bulletins</title>
  <link rel="icon" href="../../dist/img/logoAppStudent.png" type="image/png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">  
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/pages/examples/contact-us" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 fixed">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="../../dist/img/logoAppStudent.png" alt="logoAppStudent" class="brand-image img-circle elevation-3" style="opacity: .8">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4" >
            <img src="/dist/img/lcs-logo.png" alt="">
            <h5 class="version"><span style="color: red;">FOE/ENR/015/-CT</span> <br> Version : 02</h5>
          </div>
          <div class="col-sm-6">
            <h3 class="cert">CERTIFICAT D'UNITE D'ENSEIGNEMENT DE <br> <span style="margin-left: 70px;">LICENCE PROFESSIONNELLE</span> </h3>
            <h5 style="margin-left: 140px;margin-bottom:60px;">LES COURS SONOU-CALAVI</h5>
            <p class="agrement"><span style="margin-left: 100px;">AGREMENT D'ETAT</span> <br>N°683/MESRS/DC/SGMD/DGES/DPES/CTJ/CJ/SA/030SGG20 <br> 1ère Université Certifiée ISO 21001 version 2018 dans l'Afrique <br> <span style="margin-left: 100px;">Subsaharienne</span></p> 
          </div>
          <div class="col-sm-2" style="float:left;">
            <img src="/dist/img/lcs-iso.png" alt="" style="height: 10em; width: 10em ;"> 
          </div>

        </div>

        <div class="row">
          <div class="col-md-3">
            <a href=""><img src="/dist/img/user.png" alt=""></a>
          </div>
          <div class="col-md-6" id="aa">
                <p>
                  <h3>BULLETIN DE NOTES</h3>
                  <div class="annee-scolaire">
                        <label>Annee Académique : <input type="text" class="form-control form-control-border" placeholder="Annee scolaire" style="background-color:#f8f9fa"></label> 
                  </div>
                </p>
          </div>
          <div class="col-md-3">
            <p>Scanage generate</p>
          </div>
        </div>

         <div class="row">
           <div class="col-md-4" id="col1">
                <label for="Matricule">Matricule : </label>
                <input type="text" name="Matricule" id="Mat" class="form-control form-control-border" placeholder="Numero matricule" style="background-color:#f8f9fa">
                <label for="Nom">Nom : </label>
                <input type="text" name="Nom" id="Nom" class="form-control form-control-border" placeholder="Nom" style="background-color:#f8f9fa">
                <label for="Prenom">Prenom :</label>
                <input type="text" name="Prenom" id="Prenom" class="form-control form-control-border" placeholder="Prenom" style="background-color:#f8f9fa">
           </div>

           <div class="col-md-5" id="col2">
                <label for="Sexe">Sexe:</label>
                <select name="Sexe" id="sexe" class="form-control form-control-border"style="display:inline-block"style="background-color:#f8f9fa">
                  <option value="Masculin">Masculin</option>
                  <option value="Féminin">Féminin</option>
                </select>
                <label for="Date">Date de Naissance : </label>
                <input type="date" name="date"class="form-control form-control-border" id="date" placeholder="Prenom" style="background-color:#f8f9fa">

                <label for="Date">Lieu de Naissance : </label>
                <input type="text" name="Lieu"class="form-control form-control-border" id="Lieu" placeholder="Lieu de Naissance" style="background-color:#f8f9fa">
           </div>

           <div class="col-md-3" id="col3">
              <label for="Cycle">Cycle : </label>
              <input type="text" name="cycle" id="cycle" class="form-control form-control-border"placeholder="cycle" style="background-color:#f8f9fa">
              <label for="Cycle">Filière : </label>
              <input type="text" name="Filière" id="Filière" class="form-control form-control-border"placeholder="Filière" style="background-color:#f8f9fa">
              <label for="Cycle">Niveau : </label>
              <input type="text" name="Niveau" id="Niveau" class="form-control form-control-border"placeholder="Niveau" style="background-color:#f8f9fa">
           </div>
         </div>




      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Code</th>
                    <th>Unité d'Enseignement(UE)</th>
                    <th>Cr</th>
                    <th>Elements constitutifs d'UE(ECUE)</th>
                    <th>Moy ECUE</th>
                    <th>Moy UE</th>
                    <th>Frèq*</th>
                    <th>Etat</th>
                  </tr>
                 
                  <thead>
                    <tr>
                      <th colspan="9" style="text-align:center">Semestre:
                        <select name="semestre" id="semestre">
                          <option value="1">1</option>
                          <option value="3">3</option>
                          <option value="5">5</option>
                        </select>
                      </th>
                    </tr>
                  </thead>
                 
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>


                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <thead>
                    <tr>
                      <th colspan="9" style="text-align:center">Semestre:
                        <select name="semestre" id="semestre">
                          <option value="2">2</option>
                          <option value="4">4</option>
                          <option value="5">6</option>
                        </select>
                      </th>
                    </tr>
                  </thead>

                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Code</th>
                    <th>Unité d'Enseignement(UE)</th>
                    <th>Cr</th>
                    <th>Elements constitutifs d'UE(ECUE)</th>
                    <th>Moy ECUE</th>
                    <th>Moy UE</th>
                    <th>Frèq*</th>
                    <th>Etat</th>
                  </tr>
                 
                  <thead>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  
                
                  
                  <tr>
                  
                    
                  </tr>
                 
                 
                 
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <td>Webkit</td>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                  </tr>
                  </tfoot>
                </table>
                <table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th></th>
					<th>N°</th>
					<th>Code</th>
					<th>Unités d'Enseignement</th>
					<th>Cr</th>
					<th>Element Constitutifs d'UE()ECUE</th>
					<th>Moy ECUE</th>
					<th>Moy UE</th>
					<th>Fréq*</th>
					<th>Etat</th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<th></th>




				</tr>
				<tr>
					<th></th>
					<td>1</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td> </td>
					<td></td>
					<td></td>

				</tr>

				<tr>
					<th></th>
					<td>2</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

				</tr>



				<tr>
					<th></th>
					<td>3</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

				</tr>

				<tr>
					<th></th>
					<td>4</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

				</tr>

				<tr>
					<th></th>
					<td>5</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

				</tr>
				<!-- Ajoutez les autres lignes ici -->
			</tbody>
		</table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print",]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
