<style type="text/css">
	/* Extra Small */
	@media(max-width:767px){
		#visor{
			display: none;
		}
		#enlace{
			display: block;
		}
	}

	/* Small */
	@media(min-width:768px) and (max-width:991px){
		#visor{
			display: none;
		}
		#enlace{
			display: block;
		}	
	}

	/* Medium */
	@media(min-width:992px) and (max-width:1199px){
		#visor{
			display: none;
		}
		#enlace{
			display: block;
		}	
	}

	/* Large */
	@media(min-width:1200px){
		#visor{
			display: block;
		}
		#enlace{
			display: none;
		}	
	}
</style>

<section class="content" align="center" id="visor">
	<h1>Manual de usuario</h1>
	<embed src="<?php echo base_url(); ?>assets/pdfs/manual_usuario.pdf" width="600" height="800" href="Reinscripcion_2015-3.pdf"></embed>
	
	<!-- 	
	<h1>Manual tecnico</h1>
		<embed src="<?php //echo base_url(); ?>assets/pdfs/manual_tecnico.pdf" width="600" height="800" href="Reinscripcion_2015-3.pdf"></embed> 
	-->
</section>

<section class="content" id="enlace">
	<h1>Descargar el Manual de Usuario</h1>
	<a href="<?php echo base_url(); ?>assets/pdfs/manual_usuario.pdf" download="Manual_Usuario_SICAUTN">Descargar Archivo</a>
	
	<!-- 	<h1>Descargar el Manual Técnico</h1>
	<a href="<?php //echo base_url(); ?>assets/pdfs/manual_tecnico.pdf" download="Reporte2Mayo2010">Descargar Archivo</a> -->
</section>