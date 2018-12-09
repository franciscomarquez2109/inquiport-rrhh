<?php 
//===============================nueva contraseña===============================//

session_start(); // creamos la sesion de usuario
if ($_SESSION['user'] == "") {
  header('location:../pages/sesion.php');
    die();
}
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<title>Nueva contraseña</title>
 	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/general.css">

 	<script type="text/javascript" src="../assets/js/jquery-3.2.1.js"></script>
 	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.bootstrap-growl.js"></script>
  <script type="text/javascript" src="../assets/js/tooltip.js"></script>
  <script type="text/javascript" src="../assets/js/newPass.js"></script>


 </head>
 <body style="background-color: #F6F7F2; ">
  
 	<div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-offset-3 col-md-6 col-xs-12" style="margin-top: 10%;">
        <div class="panel panel-success">
            <div class="panel-heading text-center" style="color:#25373D; font-size: 20px;"><strong>Cambiar contraseña</strong></div>
            <div class="panel-body">
              <form action="../control/newPass.php" method="POST">
                <div class="form-group">
                  <div class="media">
                    <div class="media-body text-center">
                      Una vez completado esto preceso, deberà iniciar sesion nuevamente con su<strong> nueva contraseña.</strong>
                    </div>
                  </div>
                  
                </div>
                <hr>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Nueva contraseña" data-toggle="tooltip" data-placement="right" title="Ingrese una contraseña nueva">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
                    <input type="password" id="confpass" name="confpass" class="form-control" placeholder="Confirme contraseña" data-toggle="tooltip" data-placement="right" title="Confirme la nueva contraseña">
                  </div>
                </div>
                <div class="form-group">
                  <hr>
                  <button type="button" id="cambiar" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Haga clic para cambiar la contraseña"><i class="fas fa-check"></i> Cambiar</button>
                  <button type="reset" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Haga clic para limpiar campos"><i class="fas fa-eraser"></i> Limpiar</button>
                </div>
              </form>
            </div>
        </div>
      </div>
      </div>
  </div>
 </body>
 </html>

 