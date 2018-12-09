<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de sesión</title>
  <link rel="icon" href="../assets/img/inquiport.png">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Julius+Sans+One|Open+Sans" rel="stylesheet">




    <script src="../assets/js/jquery-3.2.1.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/jquery.bootstrap-growl.js"></script>
    <script type="text/javascript" src="../assets/js/tooltip.js"></script>
    <script type="text/javascript" src="../assets/js/selectUser.js"></script>
    
     

</head>
<body>
  <div class="container">
    <div class="col-md-4 col-md-offset-4 col-xs-12 col-ms-10 form">
      <div class="text-center mb-4">
        <img class="mb-4" src="../assets/img/inquiport.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit; font-size: 18px;">RR-HH | INQUIPORT S.A</font>
          </font>
        </h1>
      </div>
      <br>
      <form action="../control/selectUser.php" method="POST">
        <div class="form-group">
          <input type="text" id="user" name="user" class="form-control input-user placeholder-shown" placeholder="Usuario" autofocus data-toggle="tooltip" data-placement="right" title="Ingrese usuario">
          <input type="password" id="pass" name="pass" class="form-control input-pass" placeholder="Contraseña" data-toggle="tooltip" data-placement="right" title="Ingrese contraseña">
        </div>
        <div class="form-group">
          <button type="button" id="entrar" class="btn btn-lg btn-primary btn-block" data-toggle="tooltip" data-placement="left" title="Haga click para ingresar al sistema">ENTRAR <i class="fas fa-sign-in-alt"></i></button>
        </div>

        <div class="form-group text-center">
          <div class="col-md-6 col-ms-6 col-xs-12">
            <a class="a-user" href="searchUser.php" data-toggle="tooltip" data-placement="left" title="Haga clic para recuperar contraseña">Olvide la contraseña</a>
        </div>

          <div class="col-md-6 col-ms-6 col-xs-12">
            <a class="a-user" href="searchUserBlock.php" data-toggle="tooltip" data-placement="righ" title="Haga click para desbloquear usuario">usuario bloqueado</a>
          </div>
         
        </div>
      </form>
    </div>
  </div>
</body>
</html>

