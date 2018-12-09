<?php 

session_start();
if ($_SESSION['user']=="") {
  header('location:../pages/sesion.php');
}
//importamos las clases para alimentas listas de despliegues
include_once ('../modelo/m_statusCivil.php');
include_once ('../modelo/m_estado.php');

?>
<!DOCTYPE html>
<html>
<?php include_once '../pages/head.php';?>
<body class="skin-green sidebar-mini">
    <div class="wrapper">
      <?php include_once '../pages/header.php';?>
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
                  <h3 class="box-title">Ver Dependiente</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form>
                    <div class="form-group row">
                        <div class="col-xs-2">
                            <label for="ci">Cedula:</label>
                            <input class="form-control input-sm" id="ci" name="ci" type="text" value="<?php echo  $_GET['ci'];?>" readOnly>
                            <input class="form-control input-sm" id="id" name="id" type="hidden" value="<?php echo  $_GET['id'];?>" readOnly>
                        </div>
                        <div class="col-xs-2">
                            <label for="pn">Nombre 1:</label>
                            <input class="form-control input-sm" id="pn" name="pn" type="text" value="<?php echo   $_GET['n1'];?>" readOnly>
                        </div>
                        <div class="col-xs-2">
                            <label for="sn">Nombre 2:</label>
                            <input class="form-control input-sm" id="sn" name="sn" type="text" value="<?php echo   $_GET['n2'];?>" readOnly>
                        </div>
                        <div class="col-xs-2">
                            <label for="pa">Apellido 1:</label>
                            <input class="form-control input-sm" id="pa" name="pa" type="text" value="<?php echo   $_GET['a1'];?>" readOnly>
                        </div>
                        <div class="col-xs-2">
                            <label for="sa">Apellido 2:</label>
                            <input class="form-control input-sm" id="sa" name="sa" type="text" value="<?php echo   $_GET['a2'];?>" readOnly>
                        </div>
                        <div class="col-xs-2">
                        <label for="sexo">Sexo:</label>
                            <input class="form-control input-sm" id="sexo" name="sexo" type="text" value="<?php echo   $_GET['sexo'];?>" readOnly>
                          </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                      <div class="col-xs-2">
                        <label for="fn">Fecha de Nacimiento:</label>
                        <input class="form-control input-sm" id="fn" name="fn" type="date" value="<?php echo   $_GET['fn'];?>" readOnly>
                      </div>
                      <div class="col-xs-1">
                        <label for="edad">Edad:</label>
                        <input class="form-control input-sm" id="edad" name="edad" type="text" value="<?php echo   $_GET['edad'];?>" readOnly>
                      </div>
                      <div class="col-xs-2">
                            <label for="parentesco">Parentesco:</label>
                            <input class="form-control input-sm" id="parentesco" name="parentesco" type="text" value="<?php echo   $_GET['paren'];?>" readOnly>
                        </div>
                        <div class="col-xs-2">
                            <label for="estado_civil">Estado civil:</label>
                            <input class="form-control input-sm" id="estado_civil" name="estado_civil" type="text" value="<?php echo   $_GET['ec'];?>" readOnly>
                          </div>
                        <div class="col-xs-2">
                            <label for="condicion">Tipo ingreso:</label>
                            <input class="form-control input-sm" id="condicion" name="condicion" type="text" value="<?php echo $_GET['con'];?>" readOnly>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-xs-1">
                            <p style="margin-bottom: -0.1em;"><label for="maternidad">Maternidad:</label></p>
                            <input class="form-control input-sm" id="maternidad" name="maternidad" type="text" value="<?php echo   $_GET['mater'];?>" readOnly>
                        </div>
                        <div class="col-xs-2">
                            <p style="margin-bottom: -0.1em;"><label for="hasta25">¿Hijo hasta 25?:</label></p>
                            <input class="form-control input-sm" id="hasta25" name="hasta25" type="text" value="<?php echo   $_GET['h25'];?>" readOnly>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-xs-2">
                            <label for="monto_prima">Monto Prima:</label>
                            <input class="form-control input-sm" id="monto_prima" name="monto_prima" type="text" readOnly value="<?php echo  number_format($_GET['monto_p'], 2, ',', '.');?>">
                        </div>
                        <div class="col-xs-2">
                            <label for="mes_prima">Mes Prima:</label>
                            <input class="form-control input-sm" id="mes_prima" name="mes_prima" type="text"  readOnly value="<?php echo  $_GET['mes'];?>">
                        </div>
                        <div class="col-xs-2">
                            <label for="monto">Monto:</label>
                            <input class="form-control input-sm" id="monto" name="monto" type="text"  readOnly value="<?php echo  number_format($_GET['monto'], 2, ',', '.');?>">
                        </div>
                        <div class="col-xs-2">
                            <label for="monto_empresa">Monto Empresa:</label>
                            <input class="form-control input-sm" id="monto_empresa" name="monto_empresa" type="text" readOnly value="<?php echo  number_format($_GET['monto_empresa'], 2, ',', '.');?>">
                        </div>
                        <div class="col-xs-2">
                            <label for="monto_empleado">Monto Empleado:</label>
                            <input class="form-control input-sm" id="monto_empleado" name="monto_empleado" type="text"  readOnly value="<?php echo  number_format($_GET['monto_empleado'], 2, ',', '.');?>">
                        </div>
                    </div>
                  </form>
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
  <!-- ChartJS 1.0.1 -->
  <script src="../assets/js/Chart.js"></script>
  <!-- FastClick -->
  <script src="../assets/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/js/app.js"></script>
</body>
</html>
<!-- jQuery 2.1.4 -->