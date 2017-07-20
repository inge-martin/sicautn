<section class="content">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	      <!-- Profile Image -->
		<h1>Exito al guardar el nuevo perfil</h1>
	    <div class="box box-primary">
			<div class="box-body box-profile with-border">
			  <img style="height: 150px; width: 150px;" class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>uploads/imagenes/<?php echo $foto; ?>">

			  <h3 class="profile-username text-center"><?php echo strtoupper($nombre .' ' . $ap_paterno . ' ' . $ap_materno); ?></h3>

			  <p class="text-muted text-center"><img alt="testing" src="<?php echo base_url(); ?>js/barcode.php?text=<?php echo $matricula ?>&size=35" /></p>

			  <ul class="list-group list-group-unbordered">
			    <li class="list-group-item">
			      <b>Usuario</b> <a class="pull-right"><?php echo strtoupper($usuario); ?></a>
			    </li>
			    <li class="list-group-item">
			      <b>Matricula</b> <a class="pull-right"><?php echo $matricula; ?></a>
			    </li>
			    <li class="list-group-item">
			      <b>Email</b> <a class="pull-right"><?php echo $email; ?></a>
			    </li>
			  </ul>
			  <a href="<?php echo base_url(); ?>cLogin" class="btn btn-primary btn-block">
			  	<b>Iniciar Sesion</b>
			  </a>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
    </div>
</section>