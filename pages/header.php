<?php 

session_start();
if ($_SESSION['user']=="") {
  header('location:../pages/sesion.php');
}

?>
<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="../assets/img/Logo Inquiport.png" alt="Logo" style="width: 90%;"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><img src="../assets/img/Logo Inquiport.png" alt="Logo" style="width: 22%;"> INQUIPORT S.A</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../assets/img/admin.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nombres']; ?></span>
                </a>
                <ul class="dropdown-menu">
				
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../assets/img/admin.png" class="img-circle" alt="User Image">
                    <p><?php echo $_SESSION['user']; ?><small><?php echo $_SESSION['perfil']; ?></small></p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left"></div>
                    <div class="pull-right">
                      <a href="../control/closeSesion.php" class="btn btn-danger btn-flat"><i class="fa fa-power-off"></i> Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
	 		</header>