<?php
    require_once 'application/controllers/Controller_usuario/cAcceso.php';
    require_once 'application/models/modelosUsuario/mAcceso.php';

    // Logica
    $almAcceso = new cAcceso();
    $modelAcceso = new mAcceso();

    if(isset($_REQUEST['action'])){
        switch($_REQUEST['action']){
            case 'actualizar':
                $almAcceso->__SET('id_acceso',              $_REQUEST['id_acceso']);
                $almAcceso->__SET('entrada',                $_REQUEST['entrada']);
                $almAcceso->__SET('salida',                 $_REQUEST['salida']);
                $almAcceso->__SET('fecha',                  $_REQUEST['fecha']);
                $almAcceso->__SET('id_usuario',             $_REQUEST['id_usuario']);

                $modelAcceso->Actualizar($almAcceso);
                redirect(base_url(). 'Controller_usuario/acceso');
                break;

            case 'registrar':
                $almAcceso->__SET('id_acceso',              $_REQUEST['id_acceso']);
                $almAcceso->__SET('entrada',                $_REQUEST['entrada']);
                $almAcceso->__SET('salida',                 $_REQUEST['salida']);
                $almAcceso->__SET('fecha',                  $_REQUEST['fecha']);
                $almAcceso->__SET('id_usuario',             $_REQUEST['id_usuario']);

                $modelAcceso->Registrar($almAcceso);
                redirect(base_url(). 'Controller_usuario/acceso');
                break;

            case 'eliminar':
                $modelAcceso->Eliminar($_REQUEST['id_acceso']);
                redirect(base_url(). 'Controller_usuario/acceso');
                break;

            case 'editar':
                $almAcceso = $modelAcceso->Obtener($_REQUEST['id_acceso']);
                break;
        }
    }
?>

<section class="content">
    <div class="col-md-3"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">"<?php echo strtoupper($this->session->userdata('s_usuario')); ?>" estos son tus Detalles de Acceso </h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Entrada</th>
                                <th>Salida</th>
                                <th>Nave</th>
                                <th>Lugar</th>
                            </tr>
                        </thead>
                        <?php 
                            //aqui envias la variable de session
                            $id_usu = $this->session->userdata('s_idUsuario');
                            foreach($modelAcceso->Listar($id_usu) as $r): 
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $r->__GET('fecha'); ?></td>
                                <td><?php echo $r->__GET('entrada'); ?></td>
                                <td><?php echo $r->__GET('salida'); ?></td>
                                <td><?php echo $r->__GET('id_acceso'); ?></td>
                                <td><?php echo $r->__GET('id_usuario'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


