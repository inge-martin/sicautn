<?php
    $id_usu = $this->session->userdata('s_idUsuario');
?>
<!-- comprobarContraseña -->
<script> 
    function comprobarClave(){ 
      clave1 = document.formulario.contrasena.value 
      clave2 = document.formulario.txtContrasena1.value 

      if (clave1.length == 0 || clave2.length == 0) {
        alert("Los campos de la contraseña no pueden quedar vacios");
        return false;
      }

      if (clave1 != clave2) {
        alert("Las contraseñas deben de coincidir");
        return false;
      } else {
        //alert("Todo esta correcto");
        return true; 
      }

      var espacios = false;
      var cont = 0;
       
      while (!espacios && (cont < clave1.length)) {
        if (clave1.charAt(cont) == " ")
          espacios = true;
        cont++;
      }
       
      if (espacios) {
        alert ("La contraseña no puede contener espacios en blanco");
        return false;
      }
    }
</script>
<section class="content">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="<?php echo base_url(); ?>Controller_usuario/ccambiacontrasena/actualizar" method="post" name="formulario">
            <input type="hidden" class="form-control" id="input1" name="id_usuario" value="<?php  echo $id_usu; ?>">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar Contraseña</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">                             
                            <label for="input3" class="col-sm-6 control-label">Contraseña Actual:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" required="required" name="cActual">
                            </div>
                        </div><br><br>  
                        <div class="form-group">                                
                            <label for="input1" class="col-sm-6 control-label">Contraseña Nueva:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="input1" name="contrasena" required="required" minlength="5">
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <label for="input1" class="col-sm-6 control-label">Repite Contraseña:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="input1" name="txtContrasena1" required="required" minlength="5">
                            </div>
                        </div><br><br>              
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right" onClick="return comprobarClave()">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
  <!-- Mensaje de alerta -->
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <?php if(!empty($mensaje)){ ?>  
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-info"></i> Alerta!</h5>
            <center><h4><?php echo $mensaje; ?></h4></center>
        </div>
      <?php  } ?>
    </div>
  </div>
</section>