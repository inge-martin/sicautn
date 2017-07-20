<!DOCTYPE html>
<html>
<head>
	<title>Actualizar datos</title>
</head>
<body>
<h1>Actualizar Datos Personales</h1>
<h3>Bienvenido: <?php echo $this->session->userdata('s_usuario'); ?></h3>
<br />
	<form action="<?php echo base_url(); ?>cPersonal/actualizar" method="POST">
		<table>
			<tr>
				<td><label>Matricula: </label></td>
				<td><input type="text" name="txtmatricula"></td>
			</tr>
			<tr>
				<td><label>Nombre: </label></td>
				<td><input type="text" name="txtnombre"></td>
			</tr>
			<tr>
				<td><label>Apellido Paterno: </label></td>
				<td><input type="text" name="txtApPaterno"></td>
			</tr>
			<tr>
				<td><label>Apellido Materno: </label></td>
				<td><input type="text" name="txtApMaterno"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Actualizar"></td>
			</tr>
	</form>

	<div>
		<form action="<?php echo base_url(); ?>cPersonal/delete" method="POST">
			<table>
				<tr>
					<td><label>Eliminar Persona por id: </label></td>
					<td><input type="text" name="txtIdUsuario"></td>
					<td><input type="submit" name="Eliminar"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>