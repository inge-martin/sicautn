<section class="content">
	<div class="col-md-8">
		<!-- Horizontal Form -->
		<div class="box box-info">
		<div class="box-header with-border">
		  <h3 class="box-title">Recupera tu contraseña</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
        <form action="<?php echo base_url(); ?>crecuperacontrasena/validar" method="post" name="formulario">
		  <div class="box-body">
			<b>Proporcionanos tu nombre de usuario y correo electronico para recuperar tu contraseña.</b>
			<br><br>
		    <div class="form-group">
		      <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
		      <div class="col-sm-6">
		        <input type="email" name="txtEmail" class="form-control" id="inputEmail3" placeholder="Email">
		      </div>
		    </div><br><br>
		    <div class="form-group">
		      <label for="inputPassword3" class="col-sm-4 control-label">Nombre de usuario</label>
		      <div class="col-sm-6">
		        <input type="text" name="txtUsuario" class="form-control" id="inputPassword3" placeholder="Nombre de usuario">
		      </div>
		    </div>
		  </div>
		  <!-- /.box-body -->
		  <div class="box-footer">
		    <button type="submit" class="btn btn-info pull-right">Enviar</button>
		  </div>
		  <!-- /.box-footer -->
		</form>
		</div>
	</div>
</section>