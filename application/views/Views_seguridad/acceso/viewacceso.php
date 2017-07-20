<?php
    require_once 'application/controllers/Controller_seguridad/cAcceso.php';
    require_once 'application/models/modelosSeguridad/mAcceso.php';

    // Logica
    $alm = new cAcceso();
    $model = new mAcceso();

    if(isset($_REQUEST['action']))
    {
        switch($_REQUEST['action'])
        {
            case 'actualizar':
                $alm->__SET('id_acceso',              $_REQUEST['id_acceso']);
                $alm->__SET('entrada',                $_REQUEST['entrada']);
                $alm->__SET('salida',                 $_REQUEST['salida']);
                $alm->__SET('fecha',                  $_REQUEST['fecha']);
                $alm->__SET('id_usuario',             $_REQUEST['id_usuario']);

                $model->Actualizar($alm);
                redirect(base_url(). 'Controller_seguridad/acceso');
                break;

            case 'registrar':
                $alm->__SET('id_acceso',              $_REQUEST['id_acceso']);
                $alm->__SET('entrada',                $_REQUEST['entrada']);
                $alm->__SET('salida',                 $_REQUEST['salida']);
                $alm->__SET('fecha',                  $_REQUEST['fecha']);
                $alm->__SET('id_usuario',             $_REQUEST['id_usuario']);

                $model->Registrar($alm);
                //header('Location: viewacceso.php');
                redirect(base_url(). 'Controller_seguridad/acceso');
                break;

            case 'eliminar':
                $model->Eliminar($_REQUEST['id_acceso']);
                redirect(base_url(). 'Controller_seguridad/acceso');
                //header('Location: viewacceso.php');
                break;

            case 'editar':
                $alm = $model->Obtener($_REQUEST['id_acceso']);
                break;
        }
    }

?>

<section class="content">
    <form action="?action=<?php echo $alm->id_acceso > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de Acceso</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" name="id_acceso" value="<?php echo $alm->__GET('id_acceso'); ?>" />
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Entrada</label>
                        <div class="col-sm-12">
                            <input type="time" class="form-control" id="input1" placeholder="Entrada" name="entrada" value="<?php echo $alm->__GET('entrada'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2" class="col-sm-2 control-label">Salida</label>
                        <div class="col-sm-12">
                            <input type="time" class="form-control" id="input2" placeholder="Salida" name="salida" value="<?php echo $alm->__GET('salida'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input3" class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="input3" placeholder="Fecha" name="fecha" value="<?php echo $alm->__GET('fecha'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">Usuario</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="input4" placeholder="Usuario" name="id_usuario" value="<?php echo $alm->__GET('id_usuario'); ?>">
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
        <div class="col-md-7">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Datos de Acceso</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Entrada</th>
                                <th>Salida</th>
                                <th>Fecha</th>
                                <th>Id_usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo $r->__GET('entrada'); ?></td>
                                <td><?php echo $r->__GET('salida'); ?></td>
                                <td><?php echo $r->__GET('fecha'); ?></td>
                                <td><?php echo $r->__GET('id_usuario'); ?></td>
                                <td>
                                 <a href="?action=editar&id_acceso=<?php echo $r->id_acceso; ?>">
                                    <span class="label label-success">Editar</span>
                                 </a>
                                    <a href="?action=eliminar&id_acceso=<?php echo $r->id_acceso; ?>"><span class="label label-danger">Eliminar</span></a>
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


