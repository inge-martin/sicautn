<!-- Perfil -->
<?php
    require_once 'application/controllers/Controller_administrador/cPerfil/cPerfil.php';
    require_once 'application/models/modelosAdministrador/mPerfil/mPerfil.php';
    $model = new  mPerfil();

?>
<!-- Direccion -->
<?php 
    require_once 'application/controllers/Controller_administrador/cPerfil/cDireccion.php';
    require_once 'application/models/modelosAdministrador/mPerfil/mDireccion.php';
    $modelDireccion = new mDireccion();
?>
<!-- Vehiculo -->
<?php
    require_once 'application/controllers/Controller_administrador/cPerfil/cVehiculo.php';
    require_once 'application/models/modelosAdministrador/mPerfil/mVehiculo.php';
    $modelVehiculo = new mVehiculo();
?>
<!-- Acceso -->
<?php
    require_once 'application/controllers/Controller_administrador/cPerfil/cAcceso.php';
    require_once 'application/models/modelosAdministrador/mPerfil/mAcceso.php';
    $modelAcceso = new mAcceso();
?>

<?php
    require_once 'application/controllers/Controller_administrador/cPerfil/cPenalizaciones.php';
    require_once 'application/models/modelosAdministrador/mPerfil/mPenalizaciones.php';

    $modelPenal = new mPenalizaciones();
?>
<!-- Main content -->
<section class="content">
 
  <div class="row">
    <!-- Seccion 1 acerca de mi -->
      <div class="col-md-4">
        <?php 
            //aqui envias la variable de session
            $id_usu = $this->session->userdata('s_idUsuario');
            foreach($model->Listar($id_usu) as $r): 
        ?>
        <!-- Perfil Imagen -->
          <div class="box box-primary">
       
            <div class="box-body box-profile">
              <img style="height: 150px; width: 150px;" class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>uploads/imagenes/<?php echo $this->session->userdata('s_foto'); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo strtoupper($r->__GET('nombre') . ' ' . $r->__GET('ap_paterno') . ' ' . $r->__GET('ap_materno'))?></h3>

              <p class="text-muted text-center">Usuario del sistema</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>F. Nacimiento</b> <a class="pull-right"><?php echo strtoupper($r->__GET('fecha_nacimiento')); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Sexo</b> <a class="pull-right"><?php echo strtoupper($r->__GET('sexo')); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Curp</b> <a class="pull-right"><?php echo strtoupper($r->__GET('curp')); ?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        <!-- /.Perfil Imagen -->

        <!-- Acerca de mi -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Acerca de mi</h3>
            </div>

            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Educación</strong>
              <p class="text-muted"><?php echo strtoupper($r->__GET('id_carreras')); ?></p>
              <p class="text-muted"><b>Matricula:</b> <?php echo strtoupper($r->__GET('matricula')); ?></p>
              <p class="text-muted"><b>Turno:</b> <?php echo strtoupper($r->__GET('turno')); ?></p>
              <hr>
              <strong><i class="fa fa-phone margin-r-5"></i>Contacto</strong>
              <p class="text-muted"><b>Teléfono Casa:</b> <?php echo strtoupper($r->__GET('telefonoCasa')); ?></p>
              <p class="text-muted"><b>Teléfono Celular:</b> <?php echo strtoupper($r->__GET('telefonoCelular')); ?></p>
              <p class="text-muted"><b>Correo Electronico:</b> <?php echo $r->__GET('email'); ?></p>
              <hr>
              <strong><i class="fa fa-user margin-r-5"></i>Acceso</strong>
              <p class="text-muted"><b>Usuario:</b>  <?php echo $r->__GET('id_tipo_usuarios'); ?></p>
            </div>

          </div>
        <!-- /.Acerca de mi -->
        <?php endforeach; ?>

      </div>
    <!-- Seccion 1 acerca de mi -->

    <!-- Pestañas -->
      <div class="col-md-8">
        <div class="nav-tabs-custom">

          <!-- Ul menu de opciones -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#direccionAndvehiculo" data-toggle="tab">Dirección</a></li>
              <li><a href="#acceso" data-toggle="tab">Accesos</a></li>
              <li><a href="#penalizaciones" data-toggle="tab">Penalizaciones</a></li>
            </ul>
          <!-- Ul menu de opciones -->

          <div class="tab-content">
            <!-- Primera pestaña Direccion y Vehiculo -->
              <div class="active tab-pane" id="direccionAndvehiculo">
                <!-- Dirección -->
                  <div class="post clearfix">
                    <div class="box box-info">
                      <div class="box-header">
                        <h3 class="box-title">Detalles de Direccion</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body no-padding">
                        <table class="table table-condensed">
                          <?php 
                              //aqui envias la variable de session
                              $id_usu = $this->session->userdata('s_idUsuario');
                              foreach($modelDireccion->Listar($id_usu) as $r): 
                          ?>
                          <tr>
                            <th>C.P.</th>
                            <th>Estado</th>
                            <th>Municipio</th>
                            <th>Localidad</th>
                          </tr>
                          <tr>
                            <td><?php echo strtoupper($r->__GET('cp')); ?></td>
                            <td><?php echo strtoupper($r->__GET('id_estado')); ?></td>
                            <td><?php echo strtoupper($r->__GET('id_municipio')); ?></td>
                            <td><?php echo strtoupper($r->__GET('id_localidad')); ?></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th style="width: 25%;">Calle</th>
                            <th style="width: 25%;">Número</th>              
                            <th style="width: 25%;">Manzana</th>
                            <th style="width: 25%;">Lote</th>
                          </tr>
                          <tr>
                            <td><?php echo strtoupper($r->__GET('calle')); ?></td>
                            <td><?php echo strtoupper($r->__GET('numero')); ?></td>
                            <td><?php echo strtoupper($r->__GET('manzana')); ?></td>
                            <td><?php echo strtoupper($r->__GET('lote')); ?></td>
                          </tr>                    
                          <?php endforeach; ?>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                <!-- Dirección -->

                <!-- Vehiculo -->
                  <?php 
                      //aqui envias la variable de session
                      $id_usu = $this->session->userdata('s_idUsuario');
                      // print_r($modelVehiculo->Listar($id_usu));
                      if(empty($modelVehiculo->Listar($id_usu))){
                        echo "<center><a href='cRegVehiculo'><h3><i class='fa fa-car margin-r-5'></i>Falta registrar tu Vehiculo</h3></a></center>";
                      }else{                         
                      foreach($modelVehiculo->Listar($id_usu) as $r): 
                  ?>                 
                  <div class="post">
                      <div class="box-header with-border">
                          <h3 class="box-title"><i class="fa fa-car margin-r-5"></i>Vehiculo</h3>
                      </div>
                      <div class="row margin-bottom">
                 
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url(); ?>uploads/imagenes/vehiculos/<?php echo $r->__GET('foto_vehiculo'); ?>" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">                
                              <p class="text-muted"><b>Placas:</b>  <?php echo strtoupper($r->__GET('placas')); ?></p>
                              <p class="text-muted"><b>Modelo:</b>  <?php echo strtoupper($r->__GET('modelo')); ?></p>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <p class="text-muted"><b>Color:</b>  <?php echo strtoupper($r->__GET('color')); ?></p>
                              <p class="text-muted"><b>Año:</b>  <?php echo strtoupper($r->__GET('ano')); ?></p>
                            </div>
                            <div class="col-sm-12">
                              <p class="text-muted"><b>Descripción:</b>  <?php echo strtoupper($r->__GET('descripcion')); ?></p>
                            </div>                    
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                   
                      </div>
                  </div>
                      <?php      endforeach;         }     ?>                 
                <!-- /.Vehiculo -->
              </div>
            <!-- Primera pestaña Direccion y Vehiculo -->

            <!-- /.Segunda Pestaña Accesos-->
              <div class="tab-pane" id="acceso">
                <!-- The acceso -->
                <div class="box box-info">
                    <div class="box-header">
                      <h3 class="box-title"> Detalles de Acceso </h3>
                    </div>
                    <div class="box-body" style="overflow: auto">
                      <table id="example2" class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>Fecha</th>
                                  <th>Entrada</th>
                                  <th>Salida</th>
                                  <th>Nave</th>
                                  <th>Lugar</th>
                              </tr>
                          </thead>
                          <?php 
                              //aqui envias la variable de session
                              $id_usu = $this->session->userdata('s_idUsuario');
                              foreach($modelAcceso->Listar($id_usu) as $r): 
                          ?>
                          <tbody>
                              <tr>
                                  <td><?php echo strtoupper($r->__GET('fecha')); ?></td>
                                  <td><?php echo strtoupper($r->__GET('entrada')); ?></td>
                                  <td><?php echo strtoupper($r->__GET('salida')); ?></td>
                                  <td><?php echo strtoupper($r->__GET('id_acceso')); ?></td>
                                  <td><?php echo strtoupper($r->__GET('id_usuario')); ?></td>
                              </tr>
                          <?php endforeach; ?>
                          </tbody>
                      </table>
                    </div>
                </div>
                <!-- The acceso -->
              </div>
            <!-- /.Segunda Pestaña Accesos-->

            <!-- /.Tercera Pestaña Penalizaciones-->
              <div class="tab-pane" id="penalizaciones">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title"> Detalles de Penalizaciones </h3>
                  </div>
                  <?php 
                      //aqui envias la variable de session
                      $id_usu = $this->session->userdata('s_idUsuario');
                      // print_r($modelVehiculo->Listar($id_usu));
                      if(empty($modelPenal->Listar($id_usu))){

                        echo "<div class='alert alert-success alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h5><i class='icon fa fa-info'></i> Alerta!</h5>
                            <center><h4>Excelente, hasta el momento no tienes ninguna penalización en tu contra.</h4></center>
                        </div>";

                      }else{
                      foreach($modelPenal->Listar($id_usu) as $r): 
                  ?>                                
                  <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="18%">Motivo</th>
                                <th width="18%">Sanción</th>
                                <th width="18%">Descripción</th>
                                <th width="13%">Inicio</th>
                                <th width="13%">Termino</th>                              
                                <th width="12%">Status</th>                              
                            </tr>
                        </thead>
                        <tbody>  
                        
                        <?php 

                        ?>                    
                            <tr>
                                <td><?php echo $r->__GET('motivo'); ?></td>
                                <td><?php echo $r->__GET('sancion'); ?></td>
                                <td><?php echo $r->__GET('descripcion'); ?></td>
                                <td><?php echo $r->__GET('fecha_inicio'); ?></td>
                                <td><?php echo $r->__GET('fecha_fin'); ?></td>
                                <td>
                                <?php 
                                 
                                if($r->__GET('status') == 0){
                                  echo "Cumplida";
                                }else{
                                  echo "Vigente";
                                }

                                ?></td>
                            </tr>
                        <?php endforeach; }?>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            <!-- /.Tercera Pestaña Penalizaciones-->
          </div><!-- /.tab-content -->

        </div><!-- /.nav-tabs-custom -->
        
      </div>
    <!-- Pestañas -->
    </div> <!-- /.row -->
  </div>
 
</section>
<!-- /.content