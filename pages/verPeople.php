<?php 

session_start();
if ($_SESSION['user']=="") {
  header('location:../pages/sesion.php');
}
//importamos las clases para alimentas listas de despliegues

include_once ('../modelo/m_estado.php');

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
                  <h3 class="box-title">Ver Persona</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form>
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-user"></i> Datos Personales</a></li>
                      <li><a data-toggle="tab" href="#menu1"><i class="fa fa-user-plus"></i> Otros datos</a></li>
                      <li><a data-toggle="tab" href="#menu2"><i class="fa fa-map-marker-alt"></i> Dirección</a></li>
                      <li><a data-toggle="tab" href="#menu3"><i class="fa fa-child"></i> Hijos</a></li>
                      <li><a data-toggle="tab" href="#menu4"><i class="fa fa-graduation-cap"></i> Grado Academico</a></li>
                      <li><a data-toggle="tab" href="#menu5"><i class="fa fa-arrows-alt"></i> Area de Interes</a></li>
                      <li><a data-toggle="tab" href="#menu6"><i class="fa fa-car"></i> Vehiculos</a></li>
                      <li class="disabled"><a data-toggle="tab" href="#"><i class="fa fa-briefcase-medical"></i> Condiciones Fisicas</a></li>
                      <li class="disabled"><a data-toggle="tab" href="#"><i class="fa fa-building"></i> Experiencia Laboral</a></li>
                      <li><a data-toggle="tab" href="#menu9"><i class="fa fa-universal-access"></i> Referencias</a></li>
                    </ul>

                    <div class="tab-content">
                    <!-- pestaña home-->
                      <div id="home" class="tab-pane fade in active">
                        <h3>Datos Personales</h3><hr>
                        <div class="form-group row">
                          <div class="col-xs-2">
                            <label for="ci">Cedula:</label>
                            <input class="form-control input-sm" id="ci" name="ci" type="text" placeholder="00000000" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="pn">Primer nombre:</label>
                            <input class="form-control input-sm" id="pn" name="pn" type="text" placeholder="Nombre 1" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="sn">Segundo nombre:</label>
                            <input class="form-control input-sm" id="sn" name="sn" type="text" placeholder="Nombre 2" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="pa">Primer apellido:</label>
                            <input class="form-control input-sm" id="pa" name="pa" type="text" placeholder="Apellido 1" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="sa">Segundo pellido:</label>
                            <input class="form-control input-sm" id="sa" name="sa" type="text" placeholder="Apellido 2" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="sexo">Sexo:</label>
                            <input class="form-control input-sm" id="sexo" name="sexo" type="text" placeholder="Sexo" readOnly>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-xs-2">
                            <label for="estado_civil">Estado civil:</label>
                            <input class="form-control input-sm" id="estado_civil" name="estado_civil" type="text" placeholder="Estado civil" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="fn">Fecha de nacimiento:</label>
                            <input class="form-control input-sm" id="fn" name="fn" type="date"  onchange="Edad(this.value)" readOnly>
                          </div>
                         
                          <div class="col-xs-1">
                            <label for="edad">Edad:</label>
                            <input class="form-control input-sm" id="edad" name="edad" type="text" placeholder="00" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="lugar_nac">Lugar de nacimiento:</label>
                            <input class="form-control input-sm" id="lugar_nac" name="lugar_nac" type="text" placeholder="Nombre del lugar" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="nacionalidad">Nacionalidad:</label>
                            <input class="form-control input-sm" id="nacionalidad" name="nacionalidad" type="text" placeholder="Ejemplo: venezolano(a)" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="correo">Correo:</label>
                            <input class="form-control input-sm" id="correo" name="correo" type="text" placeholder="nombre@correo.com" readOnly>
                          </div>

                        </div>
                        <hr>
                        <div class="form-group row">
                          <div class="col-xs-4">
                            <p><label>Lateralidad:</label></p>
                            <input class="form-control input-sm" id="lateralidad" name="lateralidad" type="text" placeholder="Lateralidad" readOnly>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                          
                          <div class="col-xs-3">
                            <label for="telhabi">Teléf. Habitación:</label>
                            <input class="form-control input-sm" id="telhabi" name="telhabi" type="text" placeholder="0000000" readOnly>
                          </div>
                          
                          <div class="col-xs-3">
                            <label for="telmovil">Teléf. Movil:</label>
                            <input class="form-control input-sm" id="telmovil" name="telmovil" type="text" placeholder="0000000" readOnly>
                          </div>
                          
                          <div class="col-xs-3">
                            <label for="teladic">Teléf. Adicional:</label>
                            <input class="form-control input-sm" id="teladic" name="teladic" type="text" placeholder="0000000" readOnly>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                          <div class="col-xs-2">
                            <p style="margin-bottom: -0.1em;"><label for="licencia">Licencia de Conducir:</label></p>
                            <input class="form-control input-sm" id="licencia" name="licencia" type="text" placeholder="Licencia" readOnly>
                            
                          </div>
                          <div class="col-xs-2">
                            <label for="fecha_expe">Fecha Expedición:</label>
                            <input class="form-control input-sm" id="fecha_expe" name="fecha_expe" type="date" readOnly>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                          <div class="col-xs-1">
                            <label for="pantalon">Pantalón:</label>
                            <input class="form-control input-sm" id="pantalon" name="pantalon" type="text" placeholder="tallas" readOnly>
                          </div>
                          <div class="col-xs-1">
                            <label for="camisa">Camisa:</label>
                            <input class="form-control input-sm" id="camisa" name="camisa" type="text" placeholder="tallas" readOnly>
                          </div>
                          <div class="col-xs-1">
                            <label for="zapato">Zapato:</label>
                            <input class="form-control input-sm" id="zapato" name="zapato" type="text" placeholder="tallas" readOnly>
                          </div>
                        </div>
                  
                      </div>
                      <!-- pestaña otros datos-->
                      <div id="menu1" class="tab-pane fade">
                        <h3>Otros datos</h3>
                        <div class="form-group row">
                          <div class="col-xs-4">
                            <label for="conyuge">Nombre del Conyuge:</label>
                            <input class="form-control input-sm" id="conyuge" name="conyuge" type="text" placeholder="Ejemplo: Maria Perez" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="nac_conyuge">Nacionalidad:</label>
                            <input class="form-control input-sm" id="nac_conyuge" name="nac_conyuge" type="text" placeholder="Ejemplo: Venezolana" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="fecha_nac_conyuge">Fecha de nacimiento:</label>
                            <input class="form-control input-sm" id="fecha_nac_conyuge" name="fecha_nac_conyuge" type="date" placeholder="tallas" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="ocupacion_conyuge">Ocupación:</label>
                            <input class="form-control input-sm" id="ocupacion_conyuge" name="ocupacion_conyuge" type="text" placeholder="Ejemplo: Docente" readOnly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xs-4">
                            <label for="padre">Nombre del Padre:</label>
                            <input class="form-control input-sm" id="padre" name="padre" type="text" placeholder="Ejemplo: Maria Perez" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="nac_padre">Nacionalidad:</label>
                            <input class="form-control input-sm" id="nac_padre" name="nac_padre" type="text" placeholder="Ejemplo: Venezolana" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="fecha_nac_padre">Fecha de nacimiento:</label>
                            <input class="form-control input-sm" id="fecha_nac_padre" name="fecha_nac_padre" type="date" placeholder="tallas" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="ocupacion_padre">Ocupación:</label>
                            <input class="form-control input-sm" id="ocupacion_padre" name="ocupacion_padre" type="text" placeholder="Ejemplo: Docente" readOnly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xs-4">
                            <label for="madre">Nombre de la Madre:</label>
                            <input class="form-control input-sm" id="madre" name="madre" type="text" placeholder="Ejemplo: Maria Perez" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="nac_madre">Nacionalidad:</label>
                            <input class="form-control input-sm" id="nac_madre" name="nac_madre" type="text" placeholder="Ejemplo: Venezolana" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="fecha_nac_madre">Fecha de nacimiento:</label>
                            <input class="form-control input-sm" id="fecha_nac_madre" name="fecha_nac_madre" type="date" placeholder="tallas" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="ocupacion_madre">Ocupación:</label>
                            <input class="form-control input-sm" id="ocupacion_madre" name="ocupacion_madre" type="text" placeholder="Ejemplo: Docente" readOnly>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                          <div class="col-xs-4">
                            <label for="aof_inquiport">Amigo o Familiar en Inquiport:</label>
                            <input class="form-control input-sm" id="aof_inquiport" name="aof_inquiport" type="text" placeholder="Nombre de la Persona" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="aof_area_inquiport">Area de Trabajo:</label>
                            <input class="form-control input-sm" id="aof_area_inquiport" name="aof_area_inquiport" type="text" placeholder="Nombre del Area" readOnly>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <p style="margin-bottom: -0.5em;"><label for="">¿Como se entero del empleo?:</label></p>
                          <input class="form-control input-sm" id="conoc_empleo" name="conoc_empleo" type="text" placeholder="conociento de Empleo" readOnly>

                        </div>
                        <div class="form-group row">
                          <div class="col-xs-4">
                            <p style="margin-bottom: -0.1em;"><label for="empleo_ant">¿Ha solicitado empleo anteriormente en Inquiport?:</label></p>
                            <input class="form-control input-sm" id="empleo_ant" name="empleo_ant" type="text" placeholder="Empleo anterior" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="empleo_ant_cuando">¿Cuando?:</label>
                            <input class="form-control input-sm" id="empleo_ant_cuando" name="empleo_ant_cuando" type="date" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="empleo_ant_donde">¿Donde?:</label>
                            <input class="form-control input-sm" id="empleo_ant_donde" name="empleo_ant_donde" type="text" placeholder="Nombre del Lugar" readOnly>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                          <div class="col-xs-2">
                            <p style="margin-bottom: -0.1em;"><label for="idioma">¿Habla algun idioma?:</label></p>
                            <input class="form-control input-sm" id="idioma" name="idioma" type="text" placeholder="idioma" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="nom_idioma">Idioma:</label>
                            <input class="form-control input-sm" id="nom_idioma" name="nom_idioma" type="text" placeholder="Nombre del idioma" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="habla_idioma">Habla:</label>
                            <input class="form-control input-sm" id="habla_idioma" name="habla_idioma" type="text" placeholder="Habla idioma" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="escribe_idioma">Escribe:</label>
                            <input class="form-control input-sm" id="escribe_idioma" name="escribe_idioma" type="text" placeholder="Escribe idioma" readOnly>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <table class="table" id="tabla_dist_academicas">
                            <thead>
                              <th>Distinciones académicas</th>
                            </thead>
                            <tr>
                              <td style="width: 30%;">
                                <input type="text" name="dist_academicas[]" placeholder="Academicas, Honores, Premios, Becas, Otros" class="form-control name_list input-sm" readOnly/>
                              </td>
                          </tr>
                        </table>
                        </div>
                        <hr>
                        <div class="form-group">
                          <table class="table" id="tabla_part_sociales">
                            <thead>
                              <th>Participaciones sociales, Artistas y/o Deportivas</th>
                            </thead>
                            <tr>
                              <td style="width: 30%;">
                                <input type="text" name="part_sociales" placeholder="Sociales, Artistas y/o Deportivas, Otros" class="form-control name_list input-sm" readOnly />
                              </td>
                          </tr>
                        </table>
                        </div>
                      
                      </div>
                      <!-- pestaña direccion-->
                      <div id="menu2" class="tab-pane fade">
                        <h3>Direccion</h3>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label for="estado">Estado:</label>
                            <input class="form-control input-sm" id="estado" name="estado" type="text" placeholder="estado" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="municipio">Municipio:</label>
                            <input class="form-control input-sm" id="municipio" name="municipio" type="text" placeholder="municipio" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="ciudad">Ciudad:</label>
                            <input class="form-control input-sm" id="ciudad" name="ciudad" type="text" placeholder="ciudad" readOnly>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label for="urbanismo">Urbanismo:</label>
                            <input class="form-control input-sm" id="urbanismo" name="urbanismo" type="text" placeholder="Nombre" readOnly>
                          </div>
                          <div class="col-xs-1">
                            <label for="av_calle">Av/Calle:</label>
                            <input class="form-control input-sm" id="av_calle" name="av_calle" type="text" placeholder="Numero" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="tipo">Tipo de Vivienda:</label>
                            <input class="form-control input-sm" id="tipo" name="tipo" type="text" placeholder="Numero" readOnly>
                          </div>
                          <div class="col-xs-1">
                            <label for="numero_vivienda">N°:</label>
                            <input class="form-control input-sm" id="numero_vivienda" name="numero_vivienda" type="text" placeholder="00" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="planta">Planta:</label>
                            <input class="form-control input-sm" id="planta" name="planta" type="text" placeholder="Ejemplo: Alta/baja" readOnly>
                          </div>
                          <div class="col-xs-1">
                            <label for="piso">Piso:</label>
                            <input class="form-control input-sm" id="piso" name="piso" type="text" placeholder="00" readOnly>
                          </div>
                          
                        </div>
                      </div>
                      <!-- pestaña numero de hijos-->
                      <div id="menu3" class="tab-pane fade">
                        <h3>N° de Hijos</h3>
                        <div class="form-group">
                          <table class="table" id="tabla_hijos">
                            <thead>
                              <th>Nombres</th>
                              <th>Sexo</th>
                              <th>Nacimiento</th>
                              <th>Cedula</th>
                              <th>Ocupacion</th>
                            </thead>
                            <tr>
                              <td>
                                <input type="text" name="name_hijo" id="name_hijo" placeholder="Ejemplo: Juan" class="form-control name_list input-sm"  readOnly/>
                              </td>
                            <td>
                            <input class="form-control input-sm" id="sexo" name="sexo" type="text" placeholder="Sexo" readOnly>
                            </td>
                            <td>
                              <input type="text" name="lugar_nac_hijo" id="lugar_nac_hijo" placeholder="Nombre del lugar" class="form-control name_list input-sm" readOnly/>
                            </td>
                            <td>
                              <input type="text" name="ci_hijo" id="ci_hijo" placeholder="00000000" class="form-control name_list input-sm" readOnly/>
                            </td>
                            <td>
                              <input type="text" name="ocupacion_hijo" id="ocupacion_hijo" placeholder="Ejemplo: Estudiante" class="form-control name_list input-sm" readOnly/>
                            </td>
                          </tr>
                        </table>
                        </div>
                      </div>
                      <!-- pestaña grado academico-->
                      <div id="menu4" class="tab-pane fade">
                        <h3>Grado Academico</h3>
                        <div class="form-group">
                          <table class="table" id="tabla_grado_inst">
                            <thead>
                              <th>Nivel Educativo</th>
                              <th>Institución</th>
                              <th>Ciudad</th>
                              <th>Desde - Hasta</th>
                              <th>Años culminados</th>
                            </thead>
                            <tr>
                              <td>
                              <input class="form-control input-sm" id="nivel_esducativo" name="nivel_educativo" type="text" placeholder="Nivel Educativo" readOnly>
                            </td>
                              <td>
                                <input type="text" name="institucion" id="institucion" placeholder="Nombre de la institución" class="form-control name_list input-sm" readOnly/>
                              </td>
                            <td>
                              <input type="text" name="ciudad" id="ciudad" placeholder="Nombre" class="form-control name_list input-sm" readOnly/>
                            </td>
                            <td>
                              <input type="text" name="desde_hasta" id="desde_hasta" placeholder="0000 - 0000" class="form-control name_list input-sm" readOnly/>
                            </td>
                            <td>
                              <input type="text" name="anos_culminacion" id="anos_culminacion" placeholder="00" class="form-control name_list input-sm" readOnly/>
                            </td>
                          </tr>
                        </table>
                        </div>
                      </div>
                      <!-- pestaña areas de interes-->
                      <div id="menu5" class="tab-pane fade">
                      <h3>Area de Interes</h3>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <p style="margin-bottom: -0.5em;"><label for="">Areas de Interés:</label></p>
                            <input class="form-control input-sm" id="area_interes" name="area_interes" type="text" placeholder="Area Interes" readOnly>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <p style="margin-bottom: -0.5em;"><label for="">Conocimiento Ofimatico:</label></p>
                            <input class="form-control input-sm" id="area_ofim" name="area_ofim" type="text" placeholder="Area Ofimatica" readOnly>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label for="sueldo_aspi">Sueldo al que Aspira:</label>
                            <input class="form-control input-sm" id="sueldo_aspi" name="sueldo_aspi" type="text" placeholder="0.000,00" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="fecha_dispo">Fecha de Disponibilidad:</label>
                            <input class="form-control input-sm" id="fecha_dispo" name="fecha_dispo" type="date" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="limitacion_geo">Limitacion Geografica:</label>
                            <input class="form-control input-sm" id="limitacion_geo" name="limitacion_geo" type="text" placeholder="Limite Geografico" readOnly>
                          </div>
                        </div>
                      </div>
                      <!-- pestaña vehiculos-->
                      <div id="menu6" class="tab-pane fade">
                        <h3>Datos de Vehiculo</h3>
                        <div class="form-group row">
                          <div class="col-xs-2">
                            <p style="margin-bottom: -0.1em;"><label for="vehiculo">¿Posee Vehiculo?:</label></p>
                            <input class="form-control input-sm" id="vehiculo" name="vehiculo" type="text" placeholder="Vehiculo" readOnly>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label for="marca_vehiculo">Marca:</label>
                            <input class="form-control input-sm" id="marca_vehiculo" name="marca_vehiculo" type="text" placeholder="Ejemplo: Ford" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="modelo_vehiculo">Modelo:</label>
                            <input class="form-control input-sm" id="modelo_vehiculo" name="modelo_vehiculo" type="text" placeholder="Ejemplo: Blazer" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="version_vehiculo">Versión:</label>
                            <input class="form-control input-sm" id="version_vehiculo" name="version_vehiculo" type="text" placeholder="Nombre" readOnly>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-xs-3">
                            <p style="margin-bottom: -0.1em;"><label for="transmicion">Tipo de Transmisión:</label></p>
                            <input class="form-control input-sm" id="sexo" name="transmicion" type="transmicion" placeholder="Transmicion" readOnly>
                          </div>
                          <div class="col-xs-1">
                            <label for="cant_cilindros">Cilindros:</label>
                            <input class="form-control input-sm" id="cant_cilindros" name="cant_cilindros" type="text" placeholder="00" readOnly>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-xs-3">
                            <p style="margin-bottom: -0.1em;"><label for="titulo_registro">Titulo del Registro:</label></p>
                            <input class="form-control input-sm" id="titulo_registro" name="titulo_registro" type="text" placeholder="Titulo de registro" readOnly>
                          </div>
                          <div class="col-xs-1">
                            <label for="ano_vehiculo">Año:</label>
                            <input class="form-control input-sm" id="ano_vehiculo" name="ano_vehiculo" type="text" placeholder="0000" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="color_vehiculo">Color:</label>
                            <input class="form-control input-sm" id="color_vehiculo" name="color_vehiculo" type="text" placeholder="Ejemplo: Negro" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="uso">Tipo de Vehiculo:</label>
                            <input class="form-control input-sm" id="uso" name="uso" type="text" placeholder="uso" readOnly>
                          </div>

                        </div>

                        <div class="form-group row">
                          <div class="col-xs-1">
                            <label for="num_placa">Placa N°:</label>
                            <input class="form-control input-sm" id="num_placa" name="num_placa" type="text" placeholder="ADV-00V" readOnly>
                          </div>
                          <div class="col-xs-2">
                            <label for="num_motor">Serial del Motor:</label>
                            <input class="form-control input-sm" id="num_motor" name="num_motor" type="text" placeholder="000000000000" readOnly>
                          </div>
                          <div class="col-xs-3">
                            <label for="num_carroceria">Serial de Carroceria:</label>
                            <input class="form-control input-sm" id="num_carroceria" name="num_carroceria" type="text" placeholder="000000000000" readOnly>
                          </div>
                        </div>
                      </div>
                      <!-- pestaña condicion fisica-->
                      <div id="menu7" class="tab-pane fade in">
                        <h3>Condiciones Fisicas</h3>
                      </div>
                      <!-- pestaña experiencia laboral-->
                      <div id="menu8" class="tab-pane fade in">
                        <h4>Experiencia Laboral</h4>
                        <div class="form-group">
                          <table class="table" id="tabla_grado_inst">
                            <thead>
                              <th>Empresa</th>
                              <th>Desde</th>
                              <th>Hasta</th>
                              <th>Naturaleza del Trabajo</th>
                              <th>Al inicio</th>
                              <th>Razón de retiro</th>
                              <th>Supervisor</th>
                              <th>Hasta</th>
                              <th>AL retiro</th>
                            </thead>
                            <tr>
                              <td>
                              <input type="text" name="nom_empresa[]" placeholder="Nombre de la institución" class="form-control name_list input-sm" />
                              </td>
                              <td>
                                <input type="date" name="fecha_desde_empresa[]" placeholder="Nombre de la institución" class="form-control name_list input-sm" />
                              </td>
                            <td>
                              <input type="text" name="natu_trabajo[]" placeholder="Nombre" class="form-control name_list input-sm" />
                            </td>
                            <td style="width: 2%;">
                              <input type="text" name="inicio_empresa[]" placeholder="0000 - 0000" class="form-control name_list input-sm" />
                            </td>
                            <td>
                              <input type="text" name="razon_empresa[]" placeholder="00" class="form-control name_list input-sm" />
                            </td>
                            <td>
                              <input type="text" name="supervisor_empresa[]" placeholder="00" class="form-control name_list input-sm" />
                            </td>
                            <td style="width: 2%;">
                              <input type="text" name="hasta_empresa[]" placeholder="00" class="form-control name_list input-sm" />
                            </td>
                            <td style="width: 2%;">
                              <input type="text" name="retiro_empresa[]" placeholder="00" class="form-control name_list input-sm" />
                            </td>
                            <td>
                              <input type="text" name="retiro_empresa[]" placeholder="00" class="form-control name_list input-sm" />
                            </td>
                            <td>
                              <button type="button" name="add_grado_inst" id="add_grado_inst" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                            </td>
                          </tr>
                        </table>
                        </div>
                      </div>
                      <!-- pestaña referencia personales-->
                      <div id="menu9" class="tab-pane fade in">
                        <div class="form-group">
                          <table class="table" id="tabla_referencias">
                            <thead>
                              <th>Nombre y Apellido</th>
                              <th>Telefono</th>
                              <th>Ocupación</th>
                              <th>Compañia</th>
                            </thead>
                            <tr>
                              <td>
                                <input type="text" name="nom_ape_refe" id="nom_ape_refe" placeholder="nombre y apellido" class="form-control name_list input-sm" readOnly/>
                              </td>
                              <td>
                                <input type="text" name="telefono_refe" id="telefono_refe" placeholder="0000000" class="form-control name_list input-sm"readOnly/>
                              </td>
                            <td>
                              <input type="text" name="ocupacion_refe" id="ocupacion_refe" placeholder="Ejemplo: Ingeniero" class="form-control name_list input-sm"readOnly/>
                            </td>
                            <td>
                              <input type="text" name="compania_refe" id="compañia_refe" placeholder="Nombre de la Compañia" class="form-control name_list input-sm" readOnly/>
                            </td>
                          </tr>
                        </table>
                        </div>
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
  <script src="../assets/js/addChil.js"></script>
  <script src="../assets/js/add_part_sociales.js"></script>
  <script src="../assets/js/add_dist_academicas.js"></script>
  <script src="../assets/js/add_grado_inst.js"></script>
  <script src="../assets/js/add_referencias.js"></script>
  <script src="../assets/js/newPerson.js"></script>
  <script src="../assets/js/disabledInputs.js"></script>
  <script src="../assets/js/calcularEdad.js"></script>
  <script src="../assets/js/disabledOptions.js"></script>
  <script src="../assets/js/municipio.js"></script>


</body>
</html>
<!-- jQuery 2.1.4 -->