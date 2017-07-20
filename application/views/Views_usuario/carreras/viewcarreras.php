<?php
    require_once 'application/controllers/Controller_administrador/cCarreras.php';
    require_once 'application/models/modelosAdministrador/mCarreras.php';


    // Logica
    $alm = new cCarreras();
    $model = new mCarreras();

    if(isset($_REQUEST['action']))
    {
        switch($_REQUEST['action'])
        {
            case 'actualizar':
                $alm->__SET('id_carreras',        $_REQUEST['id_carreras']);
                $alm->__SET('nombre',                   $_REQUEST['nombre']);
                $alm->__SET('descripcion',              $_REQUEST['descripcion']);




                $model->Actualizar($alm);
                 redirect(base_url(). 'Controller_administrador/carreras');
                header('Location: viewcarreras.php');
                break;

            case 'registrar':
                $alm->__SET('id_carreras',              $_REQUEST['id_carreras']);
                $alm->__SET('nombre',                   $_REQUEST['nombre']);
                $alm->__SET('descripcion',              $_REQUEST['descripcion']);


                $model->Registrar($alm);
                redirect(base_url(). 'Controller_administrador/carreras');
                header('Location: viewcarreras.php');
                break;

            case 'eliminar':
                $model->Eliminar($_REQUEST['id_carreras']);
                hredirect(base_url(). 'Controller_administrador/carreras');
                header('Location: viewcarreras.php');
                break;

            case 'editar':
                $alm = $model->Obtener($_REQUEST['id_carreras']);
                break;
        }
    }

?>


<section class="content">
    <form action="?action=<?php echo $alm->id_carreras > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
        <div class="col-md-7">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de Carreras</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" name="id_carreras" value="<?php echo $alm->__GET('id_carreras'); ?>" />
                    <div class="form-group">
                        <label for="input3" class="col-sm-3 control-label">Nombre: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="input3" placeholder="Nombre" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>">
                        </div>
                    </div>                      
                    <div class="form-group">
                        <label for="input1" class="col-sm-3 control-label">Descripción: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="input1" placeholder="Descripcion" name="descripcion" value="<?php echo $alm->__GET('descripcion'); ?>">
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
        <div class="col-md-9">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Datos de Carreras</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo $r->__GET('nombre'); ?></td>
                                <td><?php echo $r->__GET('descripcion'); ?></td>
                                <td>
                                 <a href="?action=editar&id_carreras=<?php echo $r->id_carreras; ?>">
                                    <span class="label label-success">Editar</span>
                                 </a>
                                    <a href="?action=eliminar&id_carreras=<?php echo $r->id_carreras; ?>"><span class="label label-danger">Eliminar</span></a>
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