<?php
    require_once 'application/controllers/Controller_administrador/cPenalizaciones.php';
    require_once 'application/models/modelosAdministrador/mPenalizaciones.php';

    // Logica
    $alm = new cPenalizaciones();
    $model = new mPenalizaciones();

    if(isset($_REQUEST['action']))
    {
        switch($_REQUEST['action'])
        {
            case 'actualizar':
                $alm->__SET('id_penalizaciones',        $_REQUEST['id_penalizaciones']);
                $alm->__SET('motivo',                   $_REQUEST['motivo']);
                $alm->__SET('sancion',                  $_REQUEST['sancion']);



                $model->Actualizar($alm);
                redirect(base_url(). 'Controller_administrador/penalizaciones');
                header('Location: viewpenalizaciones.php');
                break;

            case 'registrar':
                $alm->__SET('id_penalizaciones',        $_REQUEST['id_penalizaciones']);
                $alm->__SET('motivo',                   $_REQUEST['motivo']);
                $alm->__SET('sancion',                  $_REQUEST['sancion']);


                $model->Registrar($alm);
                redirect(base_url(). 'Controller_administrador/penalizaciones');
                header('Location: viewpenalizaciones.php');
                break;

            case 'eliminar':
                $model->Eliminar($_REQUEST['id_penalizaciones']);
                redirect(base_url(). 'Controller_administrador/penalizaciones');
                header('Location: viewpenalizaciones.php');
                break;

            case 'editar':
                $alm = $model->Obtener($_REQUEST['id_penalizaciones']);
                break;
        }
    }

?>
<section class="content">
    <form action="?action=<?php echo $alm->id_penalizaciones > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de Penalizaciones</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" name="id_penalizaciones" value="<?php echo $alm->__GET('id_penalizaciones'); ?>" />
                    <div class="form-group">
                        <label for="input3" class="col-sm-2 control-label">Motivo</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="input3" placeholder="Motivo" name="motivo" value="<?php echo $alm->__GET('motivo'); ?>">
                        </div>
                    </div>                      
                    <div class="form-group">
                        <label for="input2" class="col-sm-2 control-label">Sanción</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="input2" placeholder="Sanción" name="sancion" value="<?php echo $alm->__GET('sancion'); ?>">
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
                  <h3 class="box-title">Listado de Penalizaciones</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Motivo</th>
                                <th>Sanción</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo strtoupper($r->__GET('motivo')); ?></td>
                                <td><?php echo strtoupper($r->__GET('sancion')); ?></td>
                                <td>
                                    <a href="?action=editar&id_penalizaciones=<?php echo $r->id_penalizaciones; ?>">
                                        <span class="label label-success">Editar</span>
                                    </a>
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