<?php 

session_start();
if ($_SESSION['user']=="") {
  header('location:../pages/sesion.php');
}


?>
<!DOCTYPE html>
<html>
<?php include_once '../pages/head.php';?>
<body class="skin-green sidebar-mini">
    <div class="wrapper">
    <?php include_once '../pages/header.php';?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include_once '../pages/menu.php';?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 553px;">
        <!-- Content Header (Page header) -->
				<section class="content-header">
          <h1>RR-HH | INQUIPORT S.A
            <small>Version 1.0</small>
          </h1>
          
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Inicio</li>
          </ol>
        </section>
		
		    <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Ver Trabajadores |</h3>
                  <a  style="margin-left: 0.5em;" type="button" href="../pages/registerPeople.php" name="r_people" id="r_people" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                  <br>
                    <table class="table table table-striped table-hover" id="tablaPeople">
                      <thead>
                        <th>#</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Fecha Nac</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>Acción</th>
                      </thead>
                      <tbody id="myTable">
                        <?php 
                        require '../modelo/m_newPerson.php';
                        $objPerson = new class_person();
                        $objPerson->selectPerson($sql = "SELECT p.idpersona,p.cedula,p.nombre1,p.nombre2,p.apellido1,p.apellido2,p.sexo,p.fecha_nac,p.edad,p.t_movil FROM tpersona p WHERE p.estatus = 1");
                        while ($row = $objPerson->row()) {
                          echo '<tr><td>'.$row['idpersona'].'</td>
                                <td>'.$row['cedula'].'</td>
                                <td>'.$row['nombre1'].' '.$row['nombre2'].' '.$row['apellido1'].' '.$row['apellido2'].'</td>
                                <td>'.$row['fecha_nac'].'</td>
                                <td>'.$row['edad'].'</td>
                                <td>'.$row['t_movil'].'</td>
                                <td>
                                <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                Acciones <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-eye"></i> Ver</a></li>
                                <li><a href="#"><i class="fa fa-edit"></i> Editar</a></li>
                                <li><a href="#"><i class="fa fa-times"></i> Desactivar</a></li>
                                </ul>
                              </div></td></tr>';
                        }
                        ?>
                      
                      </tbody>
                    </table>
                  </div>

                  
                </div>
              </div>
            </div>
          </div> 
        </section><!-- /.content -->
		  </div><!-- /.content-wrapper -->

      <footer class="main-footer">
	      <div class="pull-right hidden-xs">
		      <b>Versión</b> 1.0
	      </div>Desarrollo: <strong>Departamento IT <i class="fa fa-laptop"></i></strong>
      </footer>    
 
	  
  <script src="../assets/js/jquery-3.2.1.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.bootstrap-growl.js"></script>
  <!-- FastClick -->
  <script src="../assets/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/js/app.js"></script>
  <script src="../assets/js/datatables.min.js"></script>
  <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready( function () {
    $('#tablaPeople').DataTable();
});
</script>
</body>
</html>
<!-- jQuery 2.1.4 -->