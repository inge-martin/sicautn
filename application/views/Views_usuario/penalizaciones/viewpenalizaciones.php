<?php
    require_once 'application/controllers/Controller_usuario/cPenalizaciones.php';
    require_once 'application/models/modelosUsuario/mPenalizaciones.php';

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
                $alm->__SET('descripcion',              $_REQUEST['descripcion']);
                $alm->__SET('sancion',                  $_REQUEST['sancion']);



                $model->Actualizar($alm);
                redirect(base_url(). 'Controller_usuario/penalizaciones');
                header('Location: viewpenalizaciones.php');
                break;

            case 'registrar':
                $alm->__SET('id_penalizaciones',        $_REQUEST['id_penalizaciones']);
                $alm->__SET('motivo',                   $_REQUEST['motivo']);
                $alm->__SET('descripcion',              $_REQUEST['descripcion']);
                $alm->__SET('sancion',                  $_REQUEST['sancion']);


                $model->Registrar($alm);
                redirect(base_url(). 'Controller_usuario/penalizaciones');
                header('Location: viewpenalizaciones.php');
                break;

            case 'eliminar':
                $model->Eliminar($_REQUEST['id_penalizaciones']);
                redirect(base_url(). 'Controller_usuario/penalizaciones');
                header('Location: viewpenalizaciones.php');
                break;

            case 'editar':
                $alm = $model->Obtener($_REQUEST['id_penalizaciones']);
                break;
        }
    }

?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Detalles de tus Penalizaciones</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Motivo</th>
                                <th>Sanción</th>
                                <th>Descripción</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Termino</th>                              
                                <th>Status</th>                              
                            </tr>
                        </thead>
                        <?php 
                            //aqui envias la variable de session
                            $id_usu = $this->session->userdata('s_idUsuario');
                            foreach($model->Listar($id_usu) as $r): 
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $r->__GET('nombre'); ?></td>
                                <td><?php echo $r->__GET('motivo'); ?></td>
                                <td><?php echo $r->__GET('sancion'); ?></td>
                                <td><?php echo $r->__GET('descripcion'); ?></td>
                                <td><?php echo $r->__GET('fecha_inicio'); ?></td>
                                <td><?php echo $r->__GET('fecha_fin'); ?></td>
                                <td><?php echo $r->__GET('status'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>