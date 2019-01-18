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
                  <h3 class="box-title">Dependientes |</h3>
                  <a  style="margin-left: 0.5em;" type="button" href="../pages/dependent.php" name="r_dependiente" id="r_dependiente" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                    <br>
                    <table class="table table-striped table-hover display" id="tablaDep">
                      <thead>
                        <th>#</th>
                        <th>Cedula</th>
                        <th>Dependiente</th>
                        <th>asegurado</th>
                        <th>M. Prima</th>
                        <th>Monto</th>
                        <th>M. Empresa</th>
                        <th>M. Empleado</th>
                        <th>Acción</th>
                      </thead>
                      <tbody>
                        <?php 
                        require '../modelo/m_dependent.php';
                        $objDependent = new class_Dependent();
                        $objDependent->selectDependent($sql = "SELECT d.iddependiente,d.cedula,p.nombre1,p.nombre2,p.apellido1,p.apellido2,d.nom1,d.nom2,d.ape1,d.ape2,d.sexo,d.fecha_nac,d.edad,d.maternidad,ec.estado_civil,pa.parentesco,d.hijos_hasta_25,tn.tipo_nomina,a.idtipo_nomina,i.ingreso,md.monto_prima_dependiente,md.mes_prima_dependiente,md.monto_dependiente,md.monto_empresa_dependiente,md.monto_empleado_dependiente FROM tdependiente d INNER JOIN tasegurado a ON a.idasegurado = d.idasegurado INNER JOIN tpersona p ON p.idpersona = a.idpersona INNER JOIN tmontos_dependiente md ON md.iddependiente = d.iddependiente INNER JOIN testado_civil ec ON ec.idestado_civil = d.idestado_civil INNER JOIN tparentesco pa ON pa.idparentesco = d.idparentesco INNER JOIN ttiponomina tn ON tn.idtipo_nomina = a.idtipo_nomina INNER JOIN tingreso i ON i.idingreso = p.idingreso WHERE d.estatus = 1 AND a.estatus = 1 AND md.estatus =1");
                        while ($row = $objDependent->row()) {
                          echo '<tr>
                                <td>'.$row['iddependiente'].'</td>
                                <td>'.$row['cedula'].'</td>
                                <td>'.$row['nom1'].' '.$row['nom2'].' '.$row['ape1'].' '.$row['ape2'].'</td>
                                <td>'.$row['nombre1'].' '.$row['nombre2'].' '.$row['apellido1'].' '.$row['apellido2'].'</td>
                                <td><strong>'.number_format($row['monto_prima_dependiente'], 2, ',', '.').'</strong> Bs.S</td>
                                <td><strong>'.number_format($row['monto_dependiente'], 2, ',', '.').'</strong> Bs.S</td>
                                <td><strong>'.number_format($row['monto_empresa_dependiente'], 2, ',', '.').'</strong> Bs.S</td>
                                <td><strong>'.number_format($row['monto_empleado_dependiente'], 2, ',', '.').'</strong> Bs.S</td>
                                <td>
                                <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                  Acciones <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                <li><a href="../pages/verDependent.php?id='.$row['iddependiente'].'&ci='.$row['cedula'].'&n1='.$row['nom1'].'&n2='.$row['nom2'].'&a1='.$row['ape1'].'&a2='.$row['ape2'].'&sexo='.$row['sexo'].'&fn='.$row['fecha_nac'].'&edad='.$row['edad'].'&monto_p='.$row['monto_prima_dependiente'].'&mes='.$row['mes_prima_dependiente'].'&monto='.$row['monto_dependiente'].'&monto_empleado='.$row['monto_empleado_dependiente'].'&monto_empresa='.$row['monto_empresa_dependiente'].'&ec='.$row['estado_civil'].'&paren='.$row['parentesco'].'&con='.$row['ingreso'].'&mater='.$row['maternidad'].'&h25='.$row['hijos_hasta_25'].'"><i class="fa fa-eye"></i> Ver</a></li>
                                <li><a href="../pages/editDependent.php?id='.$row['iddependiente'].'&ci='.$row['cedula'].'&nom1='.$row['nombre1'].'&nom2='.$row['nombre2'].'&ape1='.$row['apellido1'].'&ape2='.$row['apellido2'].'&n1='.$row['nom1'].'&n2='.$row['nom2'].'&a1='.$row['ape1'].'&a2='.$row['ape2'].'&sexo='.$row['sexo'].'&fn='.$row['fecha_nac'].'&edad='.$row['edad'].'&monto_p='.$row['monto_prima_dependiente'].'&mes='.$row['mes_prima_dependiente'].'&monto='.$row['monto_dependiente'].'&monto_empleado='.$row['monto_empleado_dependiente'].'&monto_empresa='.$row['monto_empresa_dependiente'].'&ec='.$row['estado_civil'].'&paren='.$row['parentesco'].'&con='.$row['condicion'].'&mater='.$row['maternidad'].'&h25='.$row['hijos_hasta_25'].'&tn='.$row['tipo_nomina'].'&idtn='.$row['idtipo_nomina'].'"><i class="fa fa-edit"></i> Editar</a></li>
                                <li><a href="#" onclick="return disabledDependent('.$row['iddependiente'].');"><i class="fa fa-times"></i> Desactivar</a></li>
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
  <script src="../assets/js/disabledDependent.js"></script>
  <script src="../assets/js/datatables.min.js"></script>
  <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#tablaDep').DataTable();
  });
  </script>
</body>
</html>
<!-- jQuery 2.1.4 -->