<!DOCTYPE html>
<html>
<head>
	<title>Vista personal</title>
</head>
<body>
<div align="center">
<h1>Registro de personal</h1>
<form action="<?php echo base_url(); ?>cPersonal/guardar" method="POST">
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
			<td><input type="text" name="txtApMaterno"></td></tr>
		<tr>
			<td><label>Fecha Nacimiento: </label></td>
			<td><input type="date" name="txtFechaNaci"></td>
		</tr>
		<tr>
			<td><label>Sexo: </label></td>
			<td><input type="radio" name="txtSexo" value="hombre"> Hombre<br></td>
  			<td><input type="radio" name="txtSexo" value="mujer"> Mujer<br></td>
		</tr>
		<tr>
			<td><label>Teléfono: </label></td>
			<td><input type="number" name="txtTel"></td>
		</tr>
		<tr>
			<td><label>E-mail: </label></td>
			<td><input type="email" name="txtEmail"></td>
		</tr>
		<tr>
			<td><label>Licencia: </label></td>
			<td><input type="text" name="txtLicencia"></td>
		</tr>
		<tr>
			<td><label>Foto: </label></td>
			<td><input type="text" name="txtFoto"></td>
		</tr>
		<tr>
			<td><label>Tipo Usuario: </label></td>
			<td><input type="text" name="txtTipoUsuario"></td>
		</tr>
		<tr>
			<td><label>Carrera: </label></td>
			<td><input type="text" name="txtCarrera"></td>
		</tr>
		<tr>
			<td><label>Penalizaciones: </label></td>
			<td><input type="text" name="txtPenalizaciones"></td>
		</tr>
		<tr>
			<td><label>Vehiculo: </label></td>
			<td><input type="text" name="txtVehiculo"></td>
		</tr>
		<tr>
			<td><label>Dirección: </label></td>
			<td><input type="text" name="txtDireccion"></td>
		</tr>
		<tr>
			<td><label>Datos de acceso: </label></td>
		</tr>
		<tr>
			<td><label>Usuario: </label></td>
			<td><input type="text" name="txtUsuario"></td>
		</tr>
		<tr>
			<td><label>Contraseña: </label></td>
			<td><input type="password" name="txtContrasena"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Guardar"></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>