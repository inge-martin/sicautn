<?php 
    $id_usu = $this->session->userdata('s_idUsuario');
?>
<section class="content">
  <form class="form-horizontal" action="<?php echo base_url(); ?>Controller_usuario/cRegVehiculo/guardar" method="POST" enctype="multipart/form-data" name="formulario">

    <!-- Datos Personales -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Datos del Vehiculo</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Modelo:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="modelo del Vehiculo" name="txtModelo" required maxlength="15">
            </div>          
            <label for="input1" class="col-sm-2 control-label">Año:</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="input1" placeholder="Año del Vehiculo" name="txtAno" required>
            </div>             
          </div>
          <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Placas:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Placas del Vehiculo" name="txtPlacas" required maxlength="10">
            </div>          
            <label for="input1" class="col-sm-2 control-label">Color:</label>
            <div class="col-sm-4">
              <select class="form-control" name="txtColor" required>
                  <option value=""         style="background:red">Selecciona uno</option>
                  <option value="Rojo"     style="background:red">Rojo</option>
                  <option value="Negro"    style="background:black">Negro</option>
                  <option value="Blanco"   style="background:white">Blanco</option>
                  <option value="Azul"     style="background:blue">Azul</option>
                  <option value="Verde"    style="background:green">Verde</option>
                  <option value="Amarillo" style="background:yellow">Amarillo</option>
                  <option value="Morado"   style="background:purple">Morado</option>
              </select>              
            </div>             
          </div>                     
          <div class="form-group">            
            <label for="exampleInputFile" class="col-sm-2 control-label">Foto:</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" id="exampleInputFile" name="txtFoto" required>
            </div>
            <label for="input1" class="col-sm-2 control-label">Descripción:</label>
            <div class="col-sm-4">
                <textarea class="col-sm-12" name="txtDescripcion" style="font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; resize: none;" required maxlength="100"></textarea>              
            </div>             
          </div>
          <div class="form-group" style="display: none;">  
            <label for="input1" class="col-sm-2 control-label">ID:</label>  
            <div class="col-sm-4">              
              <input type="text" class="form-control" name="txtId" value="<?php echo $id_usu; ?>">
            </div>
          </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right" value="Guardar">Guardar</button>
        </div>          
      </div>
    </div><!-- /.Datos Personales -->
    
  </form>
  <?php echo $error; ?>
</section>
