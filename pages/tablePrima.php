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
                  <h3 class="box-title">Tabla Prima</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form>
                  <div id="menu9" class="tab-pane fade in">
                        <div class="form-group">
                          <table class="table" id="tabla_prima">
                            <thead>
                              <th>N°</th>
                              <th>Sexo</th>
                              <th>maternidad</th>
                              <th>Hasta 25</th>
                              <th>Edad Min</th>
                              <th>Edad Max</th>
                              <th>Prima Semanal</th>
                              <th>Prima Quincenal</th>
                              <th>Prima Ejecutiva</th>
                            </thead>
                            <tr>
                              <td  class="col-xs-1">
                                <input type="text" name="numero[]" id="nnumero" placeholder="N°" class="form-control name_list input-sm" />
                              </td>
                              <td>
                              <select name="sexo[]" id="sexo" class="form-control input-sm" onchange="mater()">
                                <option value="">Seleccione</option>
                                <option value="FEMENINO">FEMENINO</option>
                                <option value="MASCULINO">MASCULINO</option>
                            </select>
                              </td>
                              <td>
                              <select name="maternidad[]" id="maternidad" class="form-control input-sm">
                                <option value="">Seleccione</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                              </td>
                              <td>
                              <select name="hasta_25[]" id="hasta_25" class="form-control input-sm">
                                <option value="">Seleccione</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                            <td class="col-xs-1">
                              <input type="text" name="edad_min[]" id="edad_min" placeholder="0" class="form-control name_list input-sm" />
                            </td>
                            <td class="col-xs-1">
                              <input type="text" name="edad_max[]" id="edad_max" placeholder="00" class="form-control name_list input-sm" />
                            </td>
                            <td>
                              <input type="text" name="prima_semanal[]" id="prima_semanal" placeholder="000.000 Bs.S" class="form-control name_list input-sm" />
                            </td>
                            <td>
                              <input type="text" name="prima_quincenal[]" id="prima_quincenal" placeholder="000.000 Bs.S" class="form-control name_list input-sm" />
                            </td>
                            <td>
                              <input type="text" name="prima_ejecutivo[]" id="prima_ejecutivo" placeholder="000.000 Bs.S" class="form-control name_list input-sm" />
                            </td>
                            
                            <td>
                              <button type="button" name="add_table" id="add_table" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                            </td>
                          </tr>
                        </table>
                        <hr>
                        <div class="form-group row">
                        <div class="col-xs-2">
                            <label for="fi">Fecha Inicial:</label>
                            <input class="form-control input-sm" id="fi" name="fi" type="date">
                          </div>
                          <div class="col-xs-2">
                            <label for="ff">Fecha Final:</label>
                            <input class="form-control input-sm" id="ff" name="ff" type="date">
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <button type="button" name="genera_table" id="genera_table" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Crear Nueva Tabla</button>
                        </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Generar Cuatrimestre</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                    <button type="button" name="actualizarTabla" id="actualizarTabla" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-list-alt"></i> Actualizar Tabla Prima</button>
                    <button type="button" name="generarCorte" id="generarCorte" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#fechaCorte"><i class="fa fa-calendar-check"></i> Generar Corte</button>
                  </div>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Actualizar Tabla</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" id="newCorte">
                            </div>
                            <hr>
                            <div class="form-group row">
                              <div class="col-xs-3">
                                  <label for="fi">Fecha Inicial:</label>
                                  <input class="form-control input-sm" id="fecha_inicio_nueva" name="fecha_inicio_nueva" type="date">
                              </div>
                              <div class="col-xs-3">
                                  <label for="ff">Fecha Final:</label>
                                  <input class="form-control input-sm" id="fecha_final_nueva" name="fecha_final_nueva" type="date">
                                </div>
                            </div>
                            
                            <hr>
                            <div class="form-group">
                              <button type="button" name="genera_tabla" id="genera_new_t" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Aceptar</button>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal corte -->
                  <div class="modal fade" id="fechaCorte" role="dialog">
                    <div class="modal-dialog modal-xs">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Generar Corte</h4>
                        </div>
                        <div class="modal-body">
                        <form id="form_corte_tabla">
                            <div class="form-group">
                              <label for="fi">Fecha Inicial:</label>
                              <input class="form-control input-sm" id="cortefi" name="cortefi" type="date">
                              <label for="ff">Fecha Final:</label>
                              <input class="form-control input-sm" id="corteff" name="corteff" type="date">
                            </div>
                            <hr>
                            <div class="form-group">
                              <button type="button" name="genera_new_corte" id="genera_new_corte" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Aceptar</button>
                            </div>
                        </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Cuatrimestre Actual</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php
                  require '../config/config_db.php';
                  $link = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die('No se pudo conectar: ' . mysql_error());
                  $sql = "SELECT * FROM ttabla_prima WHERE estatus = 1";
                  $query = mysqli_query($link,$sql);
                  $row = mysqli_fetch_array($query);              
                  ?>
                    <ul class="list-group">
                        <li class="list-group-item">Fecha Inicial: <p><strong><?php echo $row['fecha_inicio'];?></strong></p></li>
                        <li class="list-group-item">Fecha Final: <p><strong><?php echo $row['fecha_final'];?></strong></p></li>
                        <li class="list-group-item">Fecha Registro: <p><strong><?php echo $row['fecha_registro'];?></strong></p></li>
                        <li class="list-group-item">Fecha corte: <p><strong><?php echo $row['fecha_corte'];?></strong></p></li>
                    </ul>
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
  <script src="../assets/js/addtablePrima.js"></script>
  <script src="../assets/js/newTable.js"></script>
  <script src="../assets/js/disabledOptions.js"></script>
  <script src="../assets/js/searchTablePrima.js"></script>
  <script src="../assets/js/corteTabla.js"></script>
  <script src="../assets/js/nuevaTabla.js"></script>

</body>
</html>
<!-- jQuery 2.1.4 -->