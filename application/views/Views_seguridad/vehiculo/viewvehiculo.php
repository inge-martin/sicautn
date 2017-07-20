<?php
    require_once 'application/controllers/Controller_seguridad/cVehiculo.php';
    require_once 'application/models/modelosSeguridad/mVehiculo.php';

    // Logica
    $alm = new cVehiculo();
    $model = new mVehiculo();

    if(isset($_REQUEST['action']))
    {
    	switch($_REQUEST['action'])
    	{
    		case 'actualizar':
    			$alm->__SET('id_vehiculo',              $_REQUEST['id_vehiculo']);
    			$alm->__SET('placas',                   $_REQUEST['placas']);
    			$alm->__SET('modelo',                   $_REQUEST['modelo']);
    			$alm->__SET('color',                    $_REQUEST['color']);
    			$alm->__SET('descripcion',              $_REQUEST['descripcion']);
                $alm->__SET('ano',                      $_REQUEST['ano']);
                $alm->__SET('foto_vehiculo',            $_REQUEST['foto_vehiculo']);


    			$model->Actualizar($alm);
    			//header('Location: viewvehiculo.php');
                redirect(base_url(). 'Controller_seguridad/vehiculo');
    			break;

    		case 'registrar':
    			$alm->__SET('id_vehiculo',              $_REQUEST['id_vehiculo']);
                $alm->__SET('placas',                   $_REQUEST['placas']);
                $alm->__SET('modelo',                   $_REQUEST['modelo']);
                $alm->__SET('color',                    $_REQUEST['color']);
                $alm->__SET('descripcion',              $_REQUEST['descripcion']);
                $alm->__SET('ano',                      $_REQUEST['ano']);
                $alm->__SET('foto_vehiculo',            $_REQUEST['foto_vehiculo']);

    			$model->Registrar($alm);
    			//header('Location: viewvehiculo.php');
                redirect(base_url(). 'Controller_seguridad/vehiculo');
    			break;

    		case 'eliminar':
    			$model->Eliminar($_REQUEST['id_vehiculo']);
    			//header('Location: viewvehiculo.php');
                redirect(base_url(). 'Controller_seguridad/vehiculo');
    			break;

    		case 'editar':
    			$alm = $model->Obtener($_REQUEST['id_vehiculo']);
    			break;
    	}
    }

?>

<section class="content">
    <form action="?action=<?php echo $alm->id_vehiculo > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de Vehiculo</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" name="id_vehiculo" value="<?php echo $alm->__GET('id_vehiculo'); ?>" />
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Placas: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input1" placeholder="Placas" name="placas" value="<?php echo $alm->__GET('placas'); ?>">
                        </div>
                        <label for="input2" class="col-sm-2 control-label">Modelo: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input2" placeholder="Modelo" name="modelo" value="<?php echo $alm->__GET('modelo'); ?>">
                        </div>                        
                    </div>
                    <br/><br/>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">Color: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="Color" name="color" value="<?php echo $alm->__GET('color'); ?>">
                        </div>
                        <label for="input4" class="col-sm-2 control-label">Descripción: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="Descripción" name="descripcion" value="<?php echo $alm->__GET('descripcion'); ?>">
                        </div>
                    </div>
                    <br/><br/>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">Año: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="Año" name="ano" value="<?php echo $alm->__GET('ano'); ?>">
                        </div>
                        <label for="input4" class="col-sm-2 control-label">Foto: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="Foto" name="foto_vehiculo" value="<?php echo $alm->__GET('foto_vehiculo'); ?>">
                        </div>
                    </div>                
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Datos de Vehiculo</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Placas</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Descripcion</th>
                                <th>Año</th>
                                <th>Foto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo $r->__GET('placas'); ?></td>
                                <td><?php echo $r->__GET('modelo'); ?></td>
                                <td><?php echo $r->__GET('color'); ?></td>
                                <td><?php echo $r->__GET('descripcion'); ?></td>
                                <td><?php echo $r->__GET('ano'); ?></td>
                                <td><?php echo $r->__GET('foto_vehiculo'); ?></td>
                                <td>
                                 <a href="?action=editar&id_vehiculo=<?php echo $r->id_vehiculo; ?>">
                                    <span class="label label-success">Editar</span>
                                 </a>
                                    <a href="?action=eliminar&id_vehiculo=<?php echo $r->id_vehiculo; ?>"><span class="label label-danger">Eliminar</span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>