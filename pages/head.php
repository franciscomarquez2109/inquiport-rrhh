<?php 

session_start();
if ($_SESSION['user']=="") {
  header('location:../pages/sesion.php');
}


?>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RR-HH | INQUIPORT S.A</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  
  <!-- Select2 -->
	<link rel="stylesheet" href="../assets/css/select2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.css">
  <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/_all-skins.css">
  <link rel="icon" href="../assets/img/inquiport.png">
</head>