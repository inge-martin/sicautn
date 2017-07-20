<?php
    require_once 'application/controllers/Controller_administrador/cAcceso.php';
    require_once 'application/models/modelosAdministrador/mAcceso.php';

    // Logica
    $alm = new cAcceso();
    $model = new mAcceso();

    if(isset($_REQUEST['action']))
    {
        switch($_REQUEST['action']){
            case 'actualizar':
                $alm->__SET('id_acceso',              $_REQUEST['id_acceso']);
                $alm->__SET('entrada',                $_REQUEST['entrada']);
                $alm->__SET('salida',                 $_REQUEST['salida']);
                $alm->__SET('fecha',                  $_REQUEST['fecha']);
                $alm->__SET('id_usuario',             $_REQUEST['id_usuario']);

                $model->Actualizar($alm);
                redirect(base_url(). 'Controller_administrador/acceso');
                break;

            case 'registrar':
                $alm->__SET('id_acceso',              $_REQUEST['id_acceso']);
                $alm->__SET('entrada',                $_REQUEST['entrada']);
                $alm->__SET('salida',                 $_REQUEST['salida']);
                $alm->__SET('fecha',                  $_REQUEST['fecha']);
                $alm->__SET('id_usuario',             $_REQUEST['id_usuario']);

                $model->Registrar($alm);
                //header('Location: viewacceso.php');
                redirect(base_url(). 'Controller_administrador/acceso');
                break;

            case 'eliminar':
                $model->Eliminar($_REQUEST['id_acceso']);
                redirect(base_url(). 'Controller_administrador/acceso');
                //header('Location: viewacceso.php');
                break;

            case 'editar':
                $alm = $model->Obtener($_REQUEST['id_acceso']);
                break;
        }
    }

?>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Listado de todos los Accesos </h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID </th>
                                <th>Entrada</th>
                                <th>Salida</th>
                                <th>Fecha</th>
                                <th>Nave</th>
                                <th>Lugar</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Paterno</th>
                                <!-- <th>Acciones</th> -->
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo strtoupper($r->__GET('id_acceso')); ?></td>
                                <td><?php echo strtoupper($r->__GET('entrada')); ?></td>
                                <td><?php echo strtoupper($r->__GET('salida')); ?></td>
                                <td><?php echo strtoupper($r->__GET('fecha')); ?></td>
                                <td><?php echo strtoupper($r->__GET('nave')); ?></td>
                                <td><?php echo strtoupper($r->__GET('lugar')); ?></td>
                                <td><?php echo strtoupper($r->__GET('usuario')); ?></td>
                                <td><?php echo strtoupper($r->__GET('nombre')); ?></td>
                                <td><?php echo strtoupper($r->__GET('ap_paterno')); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


