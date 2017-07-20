  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div align="center">
            <img src="<?php echo base_url(); ?>assets/dist/img/logo_sicautn.png" width="170" height="150" class="img-circle">
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">«Soluciones Innovadoras e Inteligentes»</li>
        <li>
          <a href="<?php echo base_url(); ?>Controller_usuario/cEstacionamiento">
            <i class="glyphicon glyphicon-road"></i><span> Ver el Estacionamiento</span>
          </a>
        </li>          
<!--         <li>
          <a href="<?php //echo base_url(); ?>Controller_usuario/penalizaciones">
            <i class="glyphicon glyphicon-remove"></i><span> Ver mis Penalizaciones</span>
          </a>
        </li>         

        <li>
          <a href="<?php //echo base_url(); ?>Controller_usuario/acceso">
            <i class="fa fa-fw fa-exchange"></i><span> Ver mis Accesos</span>
          </a>
        </li> -->
        <li>
          <a href="<?php echo base_url(); ?>Controller_usuario/perfil">
            <i class="glyphicon glyphicon-user"></i><span> Ver mi Perfil</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>Controller_usuario/cTarjeton/descargar">
            <i class="glyphicon glyphicon-print"></i><span> Imprimir Tarjetón</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>Controller_usuario/personal">
            <i class="glyphicon glyphicon-pencil"></i> Editar mis Datos 
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url(); ?>Controller_usuario/personal">
                <i class="glyphicon glyphicon-user"></i><span> Editar mi Perfil</span>
              </a>
            </li>                              
            <li>
              <a href="<?php echo base_url(); ?>Controller_usuario/direccion">
                <i class="fa fa-fw fa-map"></i><span> Editar mi Dirección</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Controller_usuario/vehiculo">
                <i class="fa fa-fw fa-car"></i><span> Editar mi Vehiculo</span>
              </a>
            </li>  
            <li>
              <a href="<?php echo base_url(); ?>Controller_usuario/ccambiacontrasena">
                <i class="fa fa-fw fa-users"></i><span> Editar mi Contraseña</span>
              </a>
            </li>
          </ul>
        </li>                                 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">