<?php
    require_once 'application/controllers/Controller_administrador/cTipoUsuarios.php';
    require_once 'application/models/modelosAdministrador/mTipoUsuarios.php';

    // Logica
    $alm = new cTipoUsuarios();
    $model = new mTipoUsuarios();

    if(isset($_REQUEST['action']))
    {
    	switch($_REQUEST['action'])
    	{
    		case 'actualizar':
    			$alm->__SET('id_tipo_usuarios',              $_REQUEST['id_tipo_usuarios']);
    			$alm->__SET('descripcion_usuario',          $_REQUEST['descripcion_usuario']);


    			$model->Actualizar($alm);
    			//header('Location: viewtipousuarios.php');
                redirect(base_url(). 'Controller_administrador/tipo_usuarios');
    			break;

    		case 'registrar':
    			$alm->__SET('id_tipo_usuarios',              $_REQUEST['id_tipo_usuarios']);
                $alm->__SET('descripcion_usuario',          $_REQUEST['descripcion_usuario']);


    			$model->Registrar($alm);
    			//header('Location: viewtipousuarios.php');
                redirect(base_url(). 'Controller_administrador/tipo_usuarios');
    			break;

    		case 'eliminar':
    			$model->Eliminar($_REQUEST['id_tipo_usuarios']);
    			//header('Location: viewtipousuarios.php');
                redirect(base_url(). 'Controller_administrador/tipo_usuarios');
    			break;

    		case 'editar':
    			$alm = $model->Obtener($_REQUEST['id_tipo_usuarios']);
    			break;
    	}
    }

?>
<section class="content">
    <form action="?action=<?php echo $alm->id_tipo_usuarios > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de Tipo de Usuarios</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" name="id_tipo_usuarios" value="<?php echo $alm->__GET('id_tipo_usuarios'); ?>" />
                    <div class="form-group">
                        <label for="input3" class="col-sm-6 control-label">Descripción de Usuario</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="input3" placeholder="descripcion de usuario" name="descripcion_usuario" value="<?php echo $alm->__GET('descripcion_usuario'); ?>">
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
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Datos de Tipo de Usuarios</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo $r->__GET('descripcion_usuario'); ?></td>
                                <td>
                                 <a href="?action=editar&id_tipo_usuarios=<?php echo $r->id_tipo_usuarios; ?>">
                                    <span class="label label-success">Editar</span>
                                 </a>
                                    <a href="?action=eliminar&id_tipo_usuarios=<?php echo $r->id_tipo_usuarios; ?>"><span class="label label-danger">Eliminar</span></a>
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