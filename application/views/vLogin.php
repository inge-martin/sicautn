<section class="content">
<div class="login-box">
  <div class="login-logo">
    <b>Login</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Logueate para iniciar sesión</p>

    <form action="<?php echo base_url(); ?>cLogin/ingresar" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtUsuario" placeholder="Ingrese su Usuario" required="required" autofocus="true">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtContrasena" placeholder="Ingrese su Contrasena" required="required">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="Ingresar">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <h4><span class="label label-danger"><?php echo $mensaje; ?></span></h4>
    <br />
    <a href="<?php echo base_url(); ?>cPersonal" class="text-center">Registra un nuevo usuario</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</section>
