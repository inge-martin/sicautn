<?php
    require_once 'application/controllers/Controller_administrador/cDireccion.php';
    require_once 'application/models/modelosAdministrador/mDireccion.php';


    // Logica
    $alm = new cDireccion();
    $model = new mDireccion();

    if(isset($_REQUEST['action']))
    {
    	switch($_REQUEST['action'])
    	{
    		case 'actualizar':
    			

                        $alm->__SET('id_direccion', $_REQUEST['id_direccion']);
                        $alm->__SET('calle',      $_REQUEST['calle']);
                        $alm->__SET('numero',      $_REQUEST['numero']);
                        $alm->__SET('manzana',       $_REQUEST['manzana']);
                        $alm->__SET('lote',           $_REQUEST['lote']);
                        $alm->__SET('cp',           $_REQUEST['cp']);
                        $alm->__SET('id_estado',    $_REQUEST['id_estado']);
                        $alm->__SET('id_municipio', $_REQUEST['id_municipio']);
                        $alm->__SET('id_localidad', $_REQUEST['id_localidad']);



    			$model->Actualizar($alm);
    			redirect(base_url(). 'Controller_administrador/direccion');
                    header('Location: viewdireccion.php');
    			break;

    		case 'registrar':
    			$alm->__SET('id_direccion', $_REQUEST['id_direccion']);
                        $alm->__SET('calle',      $_REQUEST['calle']);
                        $alm->__SET('numero',      $_REQUEST['numero']);
                        $alm->__SET('manzana',       $_REQUEST['manzana']);
                        $alm->__SET('lote',           $_REQUEST['lote']);
                        $alm->__SET('cp',           $_REQUEST['cp']);
                        $alm->__SET('id_estado',    $_REQUEST['id_estado']);
                        $alm->__SET('id_municipio', $_REQUEST['id_municipio']);
                        $alm->__SET('id_localidad', $_REQUEST['id_localidad']);

    			$model->Registrar($alm);
    			redirect(base_url(). 'Controller_administrador/direccion');
                    header('Location: viewdireccion.php');
    			break;

    		case 'eliminar':
    			$model->Eliminar($_REQUEST['id_direccion']);
    			redirect(base_url(). 'Controller_administrador/direccion');
                    header('Location: viewdireccion.php');
    			break;

    		case 'editar':
    			$alm = $model->Obtener($_REQUEST['id_direccion']);
    			break;
    	}
    }
?>

<section class="content">
    <form action="?action=<?php echo $alm->id_direccion > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de Direccion</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" name="id_direccion" value="<?php echo $alm->__GET('id_direccion'); ?>" />
                    <div class="form-group">
                        <label for="input3" class="col-sm-2 control-label">calle</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input3" placeholder="calle" name="calle" value="<?php echo $alm->__GET('calle'); ?>">
                        </div>
                    </div>                      
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">numero</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input1" placeholder="numero" name="numero" value="<?php echo $alm->__GET('numero'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2" class="col-sm-2 control-label">manzana</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input2" placeholder="manzana" name="manzana" value="<?php echo $alm->__GET('manzana'); ?>">
                        </div>
                    </div> 


                      <div class="form-group">
                        <label for="input3" class="col-sm-2 control-label">lote</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input3" placeholder="lote" name="lote" value="<?php echo $alm->__GET('lote'); ?>">
                        </div>
                    </div>                      
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">cp</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input1" placeholder="cp" name="cp" value="<?php echo $alm->__GET('cp'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2" class="col-sm-2 control-label">id_estado</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input2" placeholder="id_estado" name="id_estado" value="<?php echo $alm->__GET('id_estado'); ?>">
                        </div>
                    </div> 

                     <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">id_municipio</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input1" placeholder="id_municipio" name="id_municipio" value="<?php echo $alm->__GET('id_municipio'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2" class="col-sm-2 control-label">id_localidad</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input2" placeholder="id_localidad" name="id_localidad" value="<?php echo $alm->__GET('id_localidad'); ?>">
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
                  <h3 class="box-title">Datos de Direccion</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>calle</th>
                                <th>numero</th>
                                <th>manzana</th>
                                <th>lote</th>
                                <th>cp</th>
                                <th>Estado</th>
                                <th>Municipio</th>
                                <th>Lsocalidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo $r->__GET('calle'); ?></td>
                                <td><?php echo $r->__GET('numero'); ?></td>
                                <td><?php echo $r->__GET('manzana'); ?></td>
                                <td><?php echo $r->__GET('lote'); ?></td>
                                <td><?php echo $r->__GET('cp'); ?></td>
                                <td><?php echo $r->__GET('id_estado'); ?></td>
                                <td><?php echo $r->__GET('id_municipio'); ?></td>
                                <td><?php echo $r->__GET('id_localidad'); ?></td>
                                <td>
                                 <a href="?action=editar&id_direccion=<?php echo $r->id_direccion; ?>">
                                    <span class="label label-success">Editar</span>
                                 </a>
                                    <a href="?action=eliminar&id_direccion=<?php echo $r->id_direccion; ?>"><span class="label label-danger">Eliminar</span></a>
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