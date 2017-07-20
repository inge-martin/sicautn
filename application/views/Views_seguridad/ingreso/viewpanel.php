<section class="content">
  <form action="<?php echo base_url(); ?>Controller_seguridad/cIngreso/evaluaCamino" method="post">
    <input type="hidden" name="txtIdUsuario" value="<?php echo $id_usuario; ?>">

    <?php 
      if($id_detalle != 0 ){
        echo "<div class='row' style='display: none'>";
      }else{
        echo "<div class='row'>";
      }

      ?>
      <div class="col-md-12">
        <!-- Vehiculo -->
        <div class="col-md-12">   
          <div class="box-body">
            <div class="box box-info">
              <div class="box-header">
                  <center><h3 class="box-title">¿Los datos mostrados coinciden con el usuario en el estacionamiento?</h3></center>
              </div>          
              <div class="box-body box-profile">
                <center>
                <a href="<?php echo base_url(); ?>Controller_seguridad/cIngreso/errorPanel" type="button" class="btn btn-default btn-sm">
                  <i class="fa fa-square text-red"></i> No 
                </a>
                <button type="submit" class="btn btn-default btn-sm">
                  <i class="fa fa-square text-green"></i> Si 
                </button>
                </center>
              </div>
            </div>
          </div>
        </div>
        <!-- Vehiculo -->
      </div>
    </div>


    
    <?php 
      if($id_detalle == 0 ){
        echo "<div class='row' style='display: none'>";
      }else{
        echo "<div class='row'>";
      }

      ?>
      <div class="col-md-12">
        <!-- Penalizaciones -->
        <div class="col-md-12">   
          <div class="box-body">
            <div class="box box-danger">
              <div class="box-header with-border">
                  <center><h3 class="box-title">¡Atención! Hay penalizaciones pendientes</h3></center>
              </div>          
              <div class="box-body box-profile with-border">
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
                            <tr>
                                <td><?php echo $motivo; ?></td>
                                <td><?php echo $sancion; ?></td>
                                <td><?php echo $descripcion; ?></td>
                                <td><?php echo $fecha_inicio; ?></td>
                                <td><?php echo $fecha_fin; ?></td>
                                <td>
                                <?php 
                                 
                                if($status == 0){
                                  echo "Cumplida";
                                }else{
                                  echo "Vigente";
                                }

                                ?></td>
                            </tr>
                        </tbody>
                    </table>
              </div>
          <div class="box-footer">
              <div class="box-header with-border">          
            <center>
              <h3 class="box-title">No puedes ingresar al estacionamiento hasta cumplir tu sanción.</h3>
              <a href="<?php echo base_url(); ?>Controller_seguridad/cIngreso">Regresar</a>
              </center>                
            </div>
          </div>          
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <!-- Usuario -->
        <div class="col-md-6">   
          <div class="box-body">
            <div class="box box-primary">
              <div class="box-header with-border">
                  <center><h3 class="box-title">Datos del usuario</h3></center>
              </div>
              <div class="box-body box-profile with-border">
                <img style="height: 150px; width: 150px;" class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>uploads/imagenes/<?php echo $foto; ?>">

                <h3 class="profile-username text-center"> Información </h3>
                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Nombre:</b> <a class="pull-right"><?php echo strtoupper($nombre); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Apellido Paterno:</b> <a class="pull-right"><?php echo strtoupper($ap_paterno); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Apellido Materno:</b><a class="pull-right"><?php echo strtoupper($ap_materno); ?></a>
                  </li>
                </ul> 
              </div>
            </div>
          </div>
        </div>
        <!-- Usuario -->

        <!-- Vehiculo -->
        <div class="col-md-6">   
          <div class="box-body">
            <div class="box box-primary">
              <div class="box-header with-border">
                  <center><h3 class="box-title">Datos del vehiculo</h3></center>
              </div>          
              <div class="box-body box-profile with-border">
                <img style="height: 150px; width: 150px;" class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>uploads/imagenes/vehiculos/<?php echo $foto_vehiculo; ?>">

                <h3 class="profile-username text-center"> Información </h3>
                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Placas:</b> <a class="pull-right"><?php echo strtoupper($placas); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Modelo:</b> <a class="pull-right"><?php echo strtoupper($modelo); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Color:</b><a class="pull-right"><?php echo strtoupper($color); ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Vehiculo -->
      </div>
    </div>  
  </form>
</section>