<?php 
//===============================recuperar contraseña===============================//
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<title>Buscar usuario</title>
  <link rel="icon" href="../assets/img/search.png">
 	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/general.css">

 	<script type="text/javascript" src="../assets/js/jquery-3.2.1.js"></script>
 	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../assets/js/tooltip.js"></script>
  <script type="text/javascript" src="../assets/js/searchUserBlock.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.bootstrap-growl.js"></script>
 </head>
 <body>
 	<div class="container">
    <div class="col-sm-12 col-md-offset-3 col-md-6 col-xs-12" style="margin-top: 20%;">
        <div class="panel panel-default">
            <div class="panel-heading text-center" style="color:#25373D; font-size: 20px;"><strong>Buscar usuario</strong></div>
            <div class="panel-body">
              <form action="../control/searchUserBlock.php" method="POST" class="form-inline">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-user"></i></span>
                    <input type="text" id="searchuser" name="searchuser" class="form-control" placeholder="Buscar usuario" data-toggle="tooltip" data-placement="top" title="Ingrese un usuario">
                  </div>
                </div>
                
                <div class="form-group">
                  <button type="button"  id="searchUserBlock" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Haga clic para buscar usuario"><i class="fas fa-search"></i> Buscar</button>
                </div>
                <div class="form-group">
                  <strong id="info" style="margin: 0px 0px 0px 20px;"></strong>
                </div>
              </form>
            </div>
        </div>
      </div>
  </div>
 </body>
 </html>

 