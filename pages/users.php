<?php 

session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Usuarios</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <!-- Select2 -->
	<link rel="stylesheet" href="../assets/css/select2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/_all-skins.css">
  <link rel="icon" href="../assets/img/logo.png">

  
</head>
<body class="skin-green sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="../assets/img/logo.png" alt="Logo" style="width: 90%;"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Evaluación y </b>Merito</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          	<i class="fa fa-bars"></i></a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../assets/img/admin.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nombres']; ?></span>
                </a>
                <ul class="dropdown-menu">
				
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../assets/img/admin.png" class="img-circle" alt="User Image">
                    <p><?php echo $_SESSION['nombres']; ?><small><?php echo $_SESSION['perfil']; ?></small></p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left"></div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-power-off"></i> Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
	 		</header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
		    <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../assets/img/admin.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['nombres']; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['perfil']; ?></a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ</li>
            <li class="active">
              <a href="#"><i class="fa fa-home"></i> <span>Inicio</span></a>
            </li>

			      <li class=" treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Funcionario</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="#"><i class="fa fa-user-plus"></i> Nuevo</a></li>
				        <li class=""><a href="#"><i class="fa fa-search"></i> Buscar</a></li>
			        </ul>
            </li>
									
			      <li class=" treeview">
              <a href="#">
                <i class="fa fa-window-restore"></i> <span>Reportes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="#"><i class="fa fa-user"></i> Funcionarios</a></li>
				        <li class=""><a href="#"><i class="fa fa-graduation-cap"></i> Evaluados</a></li>
				        <li class=""><a href="#"><i class="fa fa-ban"></i> Reprobados</a></li>
			        </ul>
            </li>
						<li class=" treeview">
              <a href="#">
                <i class="fa fa-wrench"></i> <span>Configuración</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Historia del departamento</a></li>
                <li class=""><a href="#"><i class="fa fa-eye"></i> Misión y Visión</a></li>
			          <li class=""><a href="#"><i class="fa fa-file-pdf-o"></i> Campos</a></li>
              </ul>
            </li>
						<li class=" treeview">
              <a href="#">
                <i class="fa fa-lock"></i> <span>Administrar accesos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Grupos de usuarios</a></li>
							  <li class=""><a href="#"><i class="fa fa-users"></i> Usuarios</a></li>
				      </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
		  </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 553px;">
        <!-- Content Header (Page header) -->
				<section class="content-header">
          <h1>Evaluación y merito
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Usuarios</li>
          </ol>
        </section>
		
		    <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-8">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Usuarios</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form action="" method="POST" class="">
                    <div class="row">
                      <div class="col-md-12">
                        <label for="searchFun">Buscar Funcionario:</label>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-address-card"></i></span>
                            <input type="text" id="searchFun" name="searchFun" class="form-control" placeholder="Cedula" data-toggle="tooltip" data-placement="top" title="Ingresar cedula del Funcionario">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2" style="margin-left: -1.5em;">
                        <div class="form-group">
                          <button type="button"  id="" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Haga clic para buscar Funcionario"><i class="fas fa-search"></i> Buscar</button>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <label for="searchFun">Nuevo Usuario:</label>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                            <input type="text" id="" name="" class="form-control" placeholder="Usuario" data-toggle="tooltip" data-placement="top" title="Nombre de Usuario">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5" style="margin-left: -1.5em;">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                            <input type="text" id="" name="" class="form-control" placeholder="Funcionario" data-toggle="tooltip" data-placement="top" title="Nombre del Funcionario">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" style="margin-left: -1.5em;">
                        <div class="form-group">
                          <select name="" id="" class="form-control">
                            <option value="">Perfiles</option>
                            <option value="">Administrador</option>
                            <option value="">Funcionario</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <button type="button"  id="" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Haga clic para crear Usuario"><i class="fas fa-plus"></i> Crear</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Grupo Usuarios</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="list-group">
                    <li class="list-group-item">Administradores <span class="badge">2</span></li> 
                    <li class="list-group-item">Funcionarios <span class="badge">3</span></li> 
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Lista Usuarios</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-users"></i></span>
                      <input type="text" id="myInput" name="" class="form-control" placeholder="Filtrar Usuarios" data-toggle="tooltip" data-placement="top" title="Nombre del Funcionario">
                    </div>
                  </div>
                  <br>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Funcionario</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Accion</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                      <tr>
                        <td>1</td>
                        <td>24019827</td>
                        <td>Carlos javier santana</td>
                        <td>Admin</td>
                        <td>Activo</td>
                        <td>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> Acciones
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#"><i class="fa fa-edit"></i> Editar</a></li>
                              <li><a href="#"><i class="fa fa-clock"></i> Suspender</a></li>
                              <li><a href="#"><i class="fa fa-times"></i> Desactivar</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>24019826</td>
                        <td>Francisco Antonio Marquez</td>
                        <td>Admin</td>
                        <td>Activo</td>
                        <td>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> Acciones
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#"><i class="fa fa-edit"></i> Editar</a></li>
                              <li><a href="#"><i class="fa fa-clock"></i> Suspender</a></li>
                              <li><a href="#"><i class="fa fa-times"></i> Desactivar</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



          <!-- Main row -->
          <div class="row">
            
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		
		
		
		
		
		      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
	      <div class="pull-right hidden-xs">
		      <b>Versión</b> 1.0
	      </div>Desarrollo: <strong>S-536</strong>
      </footer>    
    </div><!-- ./wrapper -->
	  


 
  <script src="../assets/js/jQuery-2.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../assets/js/bootstrap.js"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="../assets/js/Chart.js"></script>
  <!-- FastClick -->
  <script src="../assets/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/js/app.js"></script>

  <script src="../assets/js/filterTable.js"></script>
</body>
</html>
<!-- jQuery 2.1.4 -->