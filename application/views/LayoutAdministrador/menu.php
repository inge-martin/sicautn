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
          <a href="<?php echo base_url(); ?>Controller_administrador/cEstacionamiento">
            <i class="glyphicon glyphicon-road"></i><span> Ver Estacionamiento </span>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url(); ?>Controller_administrador/cAdministradores">
            <i class="fa fa-fw fa-user-plus"></i><span> Agregar Personal </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>Controller_administrador/carreras">
            <i class="fa fa-fw fa-bars"></i><span> Ver Carreras </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>Controller_administrador/penalizaciones">
            <i class="glyphicon glyphicon-remove"></i><span> Ver Penalizaciones </span>
          </a>
        </li>
        <!-- Perfil -->
        <li>
          <a href="">
            <i class="glyphicon glyphicon-eye-open"></i> Ver Perfil 
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/perfil">
                <i class="glyphicon glyphicon-user"></i><span> Ver mi Perfil</span>
              </a>
          </li>
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/cTarjeton/descargar">
                <i class="glyphicon glyphicon-print"></i><span> Imprimir Tarjetón</span>
              </a>
            </li>
            <!-- Editar datos -->
            <li>
              <a href="">
                <i class="glyphicon glyphicon-pencil"></i> Editar mis Datos 
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo base_url(); ?>Controller_administrador/personales">
                    <i class="glyphicon glyphicon-user"></i><span> Editar mi Perfil</span>
                  </a>
                </li>                              
                <li>
                  <a href="<?php echo base_url(); ?>Controller_administrador/direcciones">
                    <i class="fa fa-fw fa-map"></i><span> Editar mi Dirección</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>Controller_administrador/vehiculos">
                    <i class="fa fa-fw fa-car"></i><span> Editar mi Vehiculo</span>
                  </a>
                </li>  
                <li>
                  <a href="<?php echo base_url(); ?>Controller_administrador/ccambiacontrasena">
                    <i class="fa fa-fw fa-users"></i><span> Editar mi Contraseña</span>
                  </a>
                </li>
              </ul>
            </li> 
          </ul>
        </li>

        <!-- Listado de datos -->
        <li>
          <a href="">
            <i class="glyphicon glyphicon-th-list"></i> Listados de Datos 
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/administrativos">
                <i class="glyphicon glyphicon-user"></i><span> Listado de Administrativos </span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/tipo_usuarios">
                <i class="fa fa-fw fa-user-plus"></i><span> Listado Tipo de Usuarios </span>
              </a>
            </li>            
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/personal">
                <i class="glyphicon glyphicon-user"></i><span> Listado de Alumnos </span>
              </a>
            </li>        
             <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/profesores">
                <i class="glyphicon glyphicon-user"></i><span> Listado de Profesores </span>
              </a>
            </li> 
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/vehiculo">
                <i class="fa fa-fw fa-car"></i><span> Listado de Vehiculos </span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/acceso">
                <i class="fa fa-fw fa-exchange"></i><span> Listado de Accesos </span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="">
            <i class="glyphicon glyphicon-print"></i> Reportes 
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">        
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/repAccesos/descargar">
                <i class="glyphicon glyphicon-print"></i><span> Reporte de Accesos</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/repAdministrativos/descargar">
                <i class="glyphicon glyphicon-user"></i><span> Reporte de Administrativos </span>
              </a>
            </li>           
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/repAlumnos/descargar">
                <i class="glyphicon glyphicon-user"></i><span> Reporte de Alumnos </span>
              </a>
            </li>        
             <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/repProfesores/descargar">
                <i class="glyphicon glyphicon-user"></i><span> Reporte de Empleados </span>
              </a>
            </li> 
            <li>
              <a href="<?php echo base_url(); ?>Controller_administrador/repvehiculos/descargar">
                <i class="fa fa-fw fa-car"></i><span> Reporte de Vehiculos </span>
              </a>
            </li>
          </ul>                                 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">