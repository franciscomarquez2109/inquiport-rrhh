<?php 

session_start();
if ($_SESSION['user']=="") {
  header('location:../pages/sesion.php');
}
 ?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
		    <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../assets/img/admin.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['user']; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['perfil']; ?></a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ</li>
            <li class="active">
              <a href="../pages/home.php"><i class="fa fa-home"></i> <span>Inicio</span></a>
            </li>
            
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-male"></i>
                <span>Trabajadores</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="../pages/registerPeople.php"><i class="fa fa-user-plus"></i> Nuevo</a></li>
                <li class=""><a href="../pages/viewerPeople.php"><i class="fa fa-tasks"></i> Ver lista</a></li>
              </ul>
            </li>

			      <li class=" treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Asegurados</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="../pages/insured.php"><i class="fa fa-user-plus"></i> Nuevo</a></li>
				        <li class=""><a href="../pages/viewerInsured.php"><i class="fa fa-tasks"></i> Ver lista</a></li>
			        </ul>
            </li>
            f
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Dependientes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="../pages/dependent.php"><i class="fa fa-user-plus"></i> Nuevo</a></li>
                <li class=""><a href="../pages/viewerDependent.php"><i class="fa fa-tasks"></i> Ver lista</a></li>
              </ul>
            </li>
									
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-wrench"></i> <span>Configuraciónes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="../pages/tablePrima.php"><i class="fa fa-table"></i> Tabla Prima</a></li>
                <li class=""><a href="#"><i class="fa fa-sitemap"></i> Sistema</a></li>
              </ul>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-clipboard"></i><span>Reportes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="http://spsrv:8097/reports/browse/Recursos%20Humanos" target="blank"><i class="fa fa-table"></i> Power BI Externo</a></li>
                <li class=""><a href="../report/powerbi.php"><i class="fa fa-table"></i> Power BI Interno</a></li>
                
              </ul>
            </li>
						
          </ul>
        </section>
        <!-- /.sidebar -->
		  </aside>