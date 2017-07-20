<?php
    require_once 'application/controllers/Controller_usuario/cDireccion.php';
    require_once 'application/models/modelosUsuario/mDireccion.php';


    // Logica
    $almDireccion = new cDireccion();
    $modelDireccion = new mDireccion();

    if(isset($_REQUEST['action']))
    {
        switch($_REQUEST['action'])
        {
            case 'actualizar':
                

                        $almDireccion->__SET('id_direccion', $_REQUEST['id_direccion']);
                        $almDireccion->__SET('calle',      $_REQUEST['calle']);
                        $almDireccion->__SET('numero',      $_REQUEST['numero']);
                        $almDireccion->__SET('manzana',       $_REQUEST['manzana']);
                        $almDireccion->__SET('lote',           $_REQUEST['lote']);
                        $almDireccion->__SET('cp',           $_REQUEST['cp']);
                        $almDireccion->__SET('id_estado',    $_REQUEST['id_estado']);
                        $almDireccion->__SET('id_municipio', $_REQUEST['id_municipio']);
                        $almDireccion->__SET('id_localidad', $_REQUEST['id_localidad']);



                $modelDireccion->Actualizar($almDireccion);
                redirect(base_url(). 'Controller_usuario/direccion');
                break;

            case 'registrar':
                $almDireccion->__SET('id_direccion', $_REQUEST['id_direccion']);
                        $almDireccion->__SET('calle',      $_REQUEST['calle']);
                        $almDireccion->__SET('numero',      $_REQUEST['numero']);
                        $almDireccion->__SET('manzana',       $_REQUEST['manzana']);
                        $almDireccion->__SET('lote',           $_REQUEST['lote']);
                        $almDireccion->__SET('cp',           $_REQUEST['cp']);
                        $almDireccion->__SET('id_estado',    $_REQUEST['id_estado']);
                        $almDireccion->__SET('id_municipio', $_REQUEST['id_municipio']);
                        $almDireccion->__SET('id_localidad', $_REQUEST['id_localidad']);

                $modelDireccion->Registrar($almDireccion);
                redirect(base_url(). 'Controller_usuario/direccion');
                break;

            case 'eliminar':
                $modelDireccion->Eliminar($_REQUEST['id_direccion']);
                redirect(base_url(). 'Controller_usuario/direccion');
                break;

            case 'editar':
                $almDireccion = $modelDireccion->Obtener($_REQUEST['id_direccion']);
                break;
        }
    }
?>
<section class="content">
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
                                <th>Calle</th>
                                <th>Número</th>
                                <th>Manzana</th>
                                <th>Lote</th>
                                <th>C.P.</th>
                                <th>Estado</th>
                                <th>Municipio</th>
                                <th>Localidad</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <?php 
                            //aqui envias la variable de session
                            $id_usu = $this->session->userdata('s_idUsuario');
                            foreach($modelDireccion->Listar($id_usu) as $r): 
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo strtoupper($r->__GET('calle')); ?></td>
                                <td><?php echo strtoupper($r->__GET('numero')); ?></td>
                                <td><?php echo strtoupper($r->__GET('manzana')); ?></td>
                                <td><?php echo strtoupper($r->__GET('lote')); ?></td>
                                <td><?php echo strtoupper($r->__GET('cp')); ?></td>
                                <td><?php echo strtoupper($r->__GET('id_estado')); ?></td>
                                <td><?php echo strtoupper($r->__GET('id_municipio')); ?></td>
                                <td><?php echo strtoupper($r->__GET('id_localidad')); ?></td>
                                <td>
                                 <a href="?action=editar&id_direccion=<?php echo $r->id_direccion; ?>">
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
    <?php 
        $dominio = $_SERVER['HTTP_HOST'];
        $dir =  $_SERVER['REQUEST_URI'];
        $url = $dominio.$dir;
        $actual = 'localhost/sicautn/Controller_usuario/direccion';
        if($url == $actual){
            //ocultas
    ?>
    <div class="row" style="display: none;">
    <?php        }else{    ?>
    <div class="row">
    <?php    }    ?>
        <div class="col-md-12">    
            <form action="?action=<?php echo $almDireccion->id_direccion > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Detalles de Direccion</h3>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="id_direccion" value="<?php echo $almDireccion->__GET('id_direccion'); ?>" />
                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label">Calle</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input3" placeholder="calle" name="calle" value="<?php echo strtoupper($almDireccion->__GET('calle')); ?>" required maxlength="15">
                                </div>
                                <label for="input1" class="col-sm-2 control-label">Número</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input1" placeholder="numero" name="numero" value="<?php echo $almDireccion->__GET('numero'); ?>" required maxlength="10">
                                </div>                        
                            </div>                      
                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label">Manzana</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input2" placeholder="manzana" name="manzana" value="<?php echo strtoupper($almDireccion->__GET('manzana')); ?>" maxlength="11">
                                </div>
                                <label for="input3" class="col-sm-2 control-label">Lote</label>                        
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input3" placeholder="lote" name="lote" value="<?php echo strtoupper($almDireccion->__GET('lote')); ?>" maxlength="11">
                                </div>                        
                            </div> 
                             
                            <div class="form-group" id="foraneas">
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input1" placeholder="cp" name="cp" value="<?php echo $almDireccion->__GET('cp'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input2" placeholder="id_estado" name="id_estado" value="<?php echo $almDireccion->__GET('id_estado'); ?>">
                                </div>                        
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input1" placeholder="id_municipio" name="id_municipio" value="<?php echo $almDireccion->__GET('id_municipio'); ?>" onlyread="true">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input2" placeholder="id_localidad" name="id_localidad" value="<?php echo $almDireccion->__GET('id_localidad'); ?>">
                                </div>                        
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>