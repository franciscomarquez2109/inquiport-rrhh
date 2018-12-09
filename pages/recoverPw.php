<?php 
//===============================recuperar contraseña===============================//
session_start(); // creamos la sesion de usuario

?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<title>olvide contraseña</title>
  <link rel="icon" href="../assets/img/lock.png">
 	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/general.css">

 	<script type="text/javascript" src="../assets/js/jquery-3.2.1.js"></script>
 	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../assets/js/tooltip.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.bootstrap-growl.js"></script>
  <script type="text/javascript" src="../assets/js/answerQuestions.js"></script>

 </head>
 <body>
  
 	<div class="container">

    <div class="col-sm-12 col-md-offset-3 col-xs-offset-1 col-md-6 col-xs-12" style="margin-top: 20%;">
        <div class="panel panel-default">
            <div class="panel-heading text-center" style="color:#25373D; font-size: 20px;"><strong>Olvide contraseña</strong></div>
            <div class="panel-body">
              <div class="form-group">
                <strong id="info" class="text-center"></strong>
              </div>
              <form action="../control/answerQuestions.php" method="POST" id="form-people">
                <div class="form-group">
                  <label for="r1">Pregunta 1:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><strong><?php echo $_SESSION['pregunta1']; ?></strong></span>
                    <input type="text" id="r1" name="r1" class="form-control" placeholder="Respuesta 1" data-toggle="tooltip" data-placement="right" title="campo de respuesta">
                  </div>
                </div>
                <div class="form-group">
                  <label for="r2">Pregunta 2:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><strong><?php echo $_SESSION['pregunta2']; ?></strong></span>
                    <input type="text" id="r2" name="r2" class="form-control" placeholder="Respuesta 2" data-toggle="tooltip" data-placement="right" title="campo de respuesta">
                  </div>
                </div>
                <div class="form-group">
                  <hr>
                  <button type="button" id="responder" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Haga clic para enviar las respuesta"><i class="fas fa-pencil-alt"></i> Responder</button>
                  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Haga clic para limpiar campos"><i class="fas fa-eraser"></i> Limpiar</button>
                </div>
              </form>
            </div>
        </div>
      </div>
  </div>
 </body>
 </html>

 