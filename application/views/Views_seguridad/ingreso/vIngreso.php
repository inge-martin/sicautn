<section class="content">
<div class="login-box">
  <div class="login-logo">
    <b>Registra tu Acceso</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Escanea el número de matricula</p>

    <form action="<?php echo base_url(); ?>Controller_seguridad/cIngreso/validarMatricula" method="post">
      <div class="form-group has-feedback">
        <input type="number" class="form-control" name="txtMatricula" placeholder="Escanea su número de Matricula" required="required" autofocus="true">
        <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="Ingresar">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <br>
  <?php if(!empty($mensaje)){ ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fa fa-info"></i> Alerta!</h5>
        <center><h4><?php echo $mensaje; ?></h4></center>
      </div>
  <?php  } ?>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</section>

