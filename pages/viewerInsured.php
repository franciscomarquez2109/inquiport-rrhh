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
                  <h3 class="box-title">Asegurados |</h3>
                  <a  style="margin-left: 0.5em;" type="button" href="../pages/insured.php" name="r_asegurado" id="r_asegurado" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                    <br>
                    <table class="table table-striped table-hover display" id="tablaInsure">
                      <thead>
                        <th>#</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Tipo nomina</th>
                        <th>M. Prima</th>
                        <th>Monto</th>
                        <th>M. Empresa</th>
                        <th>M. Empleado</th>
                        <th>Acción</th>
                      </thead>
                      <tbody>
                        <?php 
                        require '../modelo/m_insured.php';
                        $objInsured = new class_Insured();
                        $objInsured->selectInsured($sql = "SELECT a.idasegurado,p.cedula,p.nombre1,p.nombre2,p.apellido1,p.apellido2,p.sexo,p.edad,p.fecha_nac,t.tipo_nomina,d.departamento,a.maternidad,i.ingreso,ma.monto_prima_asegurado,ma.mes_prima_asegurado,ma.monto_asegurado,ma.monto_empresa_asegurado,ma.monto_empleado_asegurado FROM tasegurado a INNER JOIN tpersona p ON p.idpersona = a.idpersona INNER JOIN ttiponomina t ON t.idtipo_nomina = a.idtipo_nomina INNER JOIN tdepartamento d ON d.iddepartamento = a.iddepartamento INNER JOIN tingreso i ON i.idingreso = p.idingreso INNER JOIN tmontos_asegurado ma ON ma.idasegurado = a.idasegurado WHERE a.estatus = 1 AND p.estatus = 1 AND ma.estatus = 1 OR p.estatus = 2");
                        while ($row = $objInsured->row()) {
                          $ci = $row['cedula'];
                          echo 'tr>
                                  <td>'.$row['idasegurado'].'</td>
                                  <td>'.$row['cedula'].'</td>
                                  <td>'.$row['nombre1'].' '.$row['nombre2'].' '.$row['apellido1'].' '.$row['apellido2'].'</td>
                                  <td>'.$row['tipo_nomina'].'</td>
                                  <td><strong>'.number_format($row['monto_prima_asegurado'], 2, ',', '.').'</strong> Bs.S</td>
                                  <td><strong>'.number_format($row['monto_asegurado'], 2, ',', '.').'</strong> Bs.S</td>
                                  <td><strong>'.number_format($row['monto_empresa_asegurado'], 2, ',', '.').'</strong> Bs.S</td>
                                  <td><strong>'.number_format($row['monto_empleado_asegurado'], 2, ',', '.').'</strong> Bs.S</td>
                                  <td>
                                  <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                    Acciones <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><a href="../pages/verInsured.php?id='.$row['idasegurado'].'&ci='.$row['cedula'].'&nombres='.$row['nombre1'].' '.$row['nombre2'].' '.$row['apellido1'].' '.$row['apellido2'].'&tn='.$row['tipo_nomina'].'&mp='.number_format($row['monto_prima_asegurado'], 2, ',', '.').'&mes='.$row['mes_prima_asegurado'].'&monto='.number_format($row['monto_asegurado'], 2, ',', '.').'&me='.number_format($row['monto_empresa_asegurado'], 2, ',', '.').'&mempleado='.number_format($row['monto_empleado_asegurado'], 2, ',', '.').'&mater='.$row['maternidad'].'&con='.$row['ingreso'].'&edad='.$row['edad'].'&fn='.$row['fecha_nac'].'&sexo='.$row['sexo'].'&depar='.$row['departamento'].'"><i class="fa fa-eye"></i> Ver</a></li>
                                    <li><a href="../pages/editInsured.php?id='.$row['idasegurado'].'&ci='.$row['cedula'].'&nombres='.$row['nombre1'].' '.$row['nombre2'].' '.$row['apellido1'].' '.$row['apellido2'].'&tn='.$row['tipo_nomina'].'&mp='.number_format($row['monto_prima_asegurado'], 2, ',', '.').'&mes='.$row['mes_prima_asegurado'].'&monto='.number_format($row['monto_asegurado'], 2, ',', '.').'&me='.number_format($row['monto_empresa_asegurado'], 2, ',', '.').'&mempleado='.number_format($row['monto_empleado_asegurado'], 2, ',', '.').'&mater='.$row['maternidad'].'&con='.$row['condicion'].'&edad='.$row['edad'].'&fn='.$row['fecha_nac'].'&sexo='.$row['sexo'].'&depar='.$row['departamento'].'"><i class="fa fa-edit"></i> Editar</a></li>
                                    <li><a href="#" onclick="return disabledInsured('.$row['idasegurado'].')"><i class="fa fa-times"></i> Desactivar</a></li>
                                  </ul>
                                </div>
                       
                                </tr>';
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
  <script src="../assets/js/viewerInsured.js"></script>
  <script src="../assets/js/disabledInsured.js"></script>
  <script src="../assets/js/datatables.min.js"></script>
  <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
  


<script>
  $(document).ready( function () {
    $('#tablaInsure').DataTable();
});
</script>
</body>
</html>
<!-- jQuery 2.1.4 -->