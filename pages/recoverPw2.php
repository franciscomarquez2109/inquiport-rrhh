<?php 
//===============================recuperar contraseña===============================//
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
 	<title>Recuperar contraseña</title>
 	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/general.css">

 	<script type="text/javascript" src="../assets/js/jquery-3.2.1.js"></script>
 	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../assets/js/tooltip.js"></script>
  <script type="text/javascript" src="../assets/js/popover.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.bootstrap-growl.js"></script>
  <script type="text/javascript" src="../assets/js/changePass.js"></script>
 </head>
 <body>
  
 	<div class="container">

    <div class="col-sm-12 col-md-offset-3 col-md-6 col-xs-12" style="margin-top: 25%;">
        <div class="panel panel-success">
            <div class="panel-heading text-center" style="color:#25373D;">Restablecer contraseña</div>
            <div class="panel-body">
              <form action="../control/changePass.php" method="POST" id="form-people">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Nueva contraseña" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Minimo 8 caracteres, 1 letra minuscula, 1 numero, solo caracteres especiales.  ( _ / . * )">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
                    <input type="password" id="confpass" name="confpass" class="form-control" placeholder="Confirme contraseña" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Minimo 8 caracteres, 1 letra minuscula, 1 numero, solo caracteres especiales.  ( _ / . * )">
                  </div>
                </div>
                <div class="form-group">
                  <hr>
                  <button type="button" id="cambiarPass" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Haga clic para cambiar la contraseña"><i class="fas fa-pencil-alt"></i> Cambiar</button>
                  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Haga clic para limpiar campos"><i class="fas fa-eraser"></i> Limpiar</button>
                </div>
              </form>
            </div>
        </div>
      </div>

  
  </div>
 </body>
 </html>

 