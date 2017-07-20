<?php

    require_once 'application/controllers/Controller_seguridad/cPersonal.php';
    require_once 'application/models/modelosSeguridad/mPersonal.php';

    // Logica
    $alm = new cPersonal();
    $model = new  mPersonal();

    if(isset($_REQUEST['action']))
    {
    	switch($_REQUEST['action'])
    	{
    		case 'actualizar':
    			   

                    $alm->__SET('id_persona',$_REQUEST['id_persona']);
                    $alm->__SET('matricula',     $_REQUEST['matricula']);
                    $alm->__SET('turno',     $_REQUEST['turno']);
                    $alm->__SET('nombre',      $_REQUEST['nombre']);
                    $alm->__SET('ap_paterno',$_REQUEST['ap_paterno']);
                    $alm->__SET('ap_materno',        $_REQUEST['ap_materno']);
                    $alm->__SET('fecha_nacimiento',        $_REQUEST['fecha_nacimiento']);
                    $alm->__SET('sexo',$_REQUEST['sexo']);
                    $alm->__SET('curp',$_REQUEST['curp']);
                    $alm->__SET('telefonoCasa',     $_REQUEST['telefonoCasa']);
                    $alm->__SET('telefonoCelular',     $_REQUEST['telefonoCelular']);
                    $alm->__SET('email',      $_REQUEST['email']);
                    $alm->__SET('licencia',$_REQUEST['licencia']);
                    $alm->__SET('foto',        $_REQUEST['foto']);
                    $alm->__SET('id_tipo_usuarios',$_REQUEST['id_tipo_usuarios']);
                    $alm->__SET('id_carreras',     $_REQUEST['id_carreras']);
                    $alm->__SET('id_penalizaciones',      $_REQUEST['id_penalizaciones']);
                    $alm->__SET('id_vehiculo',$_REQUEST['id_vehiculo']);
                    $alm->__SET('id_direccion',        $_REQUEST['id_direccion']);
                


    			$model->Actualizar($alm);
                redirect(base_url(). 'Controller_seguridad/personal');
    			break;

    		case 'registrar':

    			 $alm->__SET('id_persona',$_REQUEST['id_persona']);
                    $alm->__SET('matricula',     $_REQUEST['matricula']);
                    $alm->__SET('turno',     $_REQUEST['turno']);
                    $alm->__SET('nombre',      $_REQUEST['nombre']);
                    $alm->__SET('ap_paterno',$_REQUEST['ap_paterno']);
                    $alm->__SET('ap_materno',        $_REQUEST['ap_materno']);
                    $alm->__SET('fecha_nacimiento',        $_REQUEST['fecha_nacimiento']);
                    $alm->__SET('sexo',$_REQUEST['sexo']);
                    $alm->__SET('curp',$_REQUEST['curp']);
                    $alm->__SET('telefonoCasa',     $_REQUEST['telefonoCasa']);
                    $alm->__SET('telefonoCelular',     $_REQUEST['telefonoCelular']);
                    $alm->__SET('email',      $_REQUEST['email']);
                    $alm->__SET('licencia',$_REQUEST['licencia']);
                    $alm->__SET('foto',        $_REQUEST['foto']);
                    $alm->__SET('id_tipo_usuarios',$_REQUEST['id_tipo_usuarios']);
                    $alm->__SET('id_carreras',     $_REQUEST['id_carreras']);
                    $alm->__SET('id_penalizaciones',      $_REQUEST['id_penalizaciones']);
                    $alm->__SET('id_vehiculo',$_REQUEST['id_vehiculo']);
                    $alm->__SET('id_direccion',        $_REQUEST['id_direccion']);
                    


    			$model->Registrar($alm);
    			redirect(base_url(). 'Controller_seguridad/personal');
    			break;

    		case 'eliminar':
    			$model->Eliminar($_REQUEST['id_persona']);
    			redirect(base_url(). 'Controller_seguridad/personal');
    			break;

    		case 'editar':
    			$alm = $model->Obtener($_REQUEST['id_persona']);
    			break;
    	}
    }
?>

<section class="content">
    <form action="?action=<?php echo $alm->id_persona > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles de Personal</h3>
                </div>
                <div class="box-body">
                    <input type="hidden" name="id_persona" value="<?php echo $alm->__GET('id_persona'); ?>" />
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">matricula</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input1" placeholder="matricula" name="matricula" value="<?php echo $alm->__GET('matricula'); ?>">
                        </div>
                        <label for="input2" class="col-sm-2 control-label">turno</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input2" placeholder="turno" name="turno" value="<?php echo $alm->__GET('turno'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">nombre</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="nombre" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>">
                        </div>
                        <label for="input4" class="col-sm-2 control-label">ap_paterno</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="ap_paterno" name="ap_paterno" value="<?php echo $alm->__GET('ap_paterno'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">ap_materno</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="ap_materno" name="ap_materno" value="<?php echo $alm->__GET('ap_materno'); ?>">
                        </div>
                        <label for="input4" class="col-sm-2 control-label">fecha_nacimiento</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $alm->__GET('fecha_nacimiento'); ?>">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">sexo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input1" placeholder="sexo" name="sexo" value="<?php echo $alm->__GET('sexo'); ?>">
                        </div>
                        <label for="input2" class="col-sm-2 control-label">curp</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input2" placeholder="curp" name="curp" value="<?php echo $alm->__GET('curp'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">telefono Casa</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="telefonoCasa" name="telefonoCasa" value="<?php echo $alm->__GET('telefonoCasa'); ?>">
                        </div>
                        <label for="input4" class="col-sm-2 control-label">telefono Celular</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="telefonoCelular" name="telefonoCelular" value="<?php echo $alm->__GET('telefonoCelular'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="email" name="email" value="<?php echo $alm->__GET('email'); ?>">
                        </div>
                        <label for="input4" class="col-sm-2 control-label">licencia</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="licencia" name="licencia" value="<?php echo $alm->__GET('licencia'); ?>">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">foto</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input1" placeholder="foto" name="foto" value="<?php echo $alm->__GET('foto'); ?>">
                        </div>
                        <label for="input2" class="col-sm-2 control-label">id_tipo_usuarios</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input2" placeholder="id_tipo_usuarios" name="id_tipo_usuarios" value="<?php echo $alm->__GET('id_tipo_usuarios'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">id_carreras</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="id_carreras" name="id_carreras" value="<?php echo $alm->__GET('id_carreras'); ?>">
                        </div>
                        <label for="input4" class="col-sm-2 control-label">id_penalizaciones</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="id_penalizaciones" name="id_penalizaciones" value="<?php echo $alm->__GET('id_penalizaciones'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">id_vehiculo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="id_vehiculo" name="id_vehiculo" value="<?php echo $alm->__GET('id_vehiculo'); ?>">
                        </div>
                        <label for="input4" class="col-sm-2 control-label">id_direccion</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input4" placeholder="id_direccion" name="id_direccion" value="<?php echo $alm->__GET('id_direccion'); ?>">
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
                  <h3 class="box-title">Datos de Personal</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>matricula</th>
                            <th>turno</th>
                            <th>nombre</th>
                            <th>Paterno</th>
                            <th>Materno</th>
                            <th>Nacimiento</th>
                            <th>sexo</th>
                            <th>curp</th>
                            <th>Tel Casa</th>
                            <th>Tel Celular</th>
                            <th>email</th>
                            <th>licencia</th>
                            <th>foto</th>
                            <th>tipo_usuarios</th>
                            <th>carreras</th>
                            <th>penalizaciones</th>
                            <th>vehiculo</th>
                            <th>direccion</th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                            <td><?php echo $r->__GET('matricula'); ?></td>
                            <td><?php echo $r->__GET('turno'); ?></td>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('ap_paterno'); ?></td>
                            <td><?php echo $r->__GET('ap_materno'); ?></td>
                            <td><?php echo $r->__GET('fecha_nacimiento'); ?></td>
                            <td><?php echo $r->__GET('sexo'); ?></td>
                            <td><?php echo $r->__GET('curp'); ?></td>
                            <td><?php echo $r->__GET('telefonoCasa'); ?></td>
                            <td><?php echo $r->__GET('telefonoCelular'); ?></td>
                            <td><?php echo $r->__GET('email'); ?></td>
                            <td><?php echo $r->__GET('licencia'); ?></td>
                            <td><?php echo $r->__GET('foto'); ?></td>
                            <td><?php echo $r->__GET('id_tipo_usuarios'); ?></td>
                            <td><?php echo $r->__GET('id_carreras'); ?></td>
                            <td><?php echo $r->__GET('id_penalizaciones'); ?></td>
                            <td><?php echo $r->__GET('id_vehiculo'); ?></td>
                            <td><?php echo $r->__GET('id_direccion'); ?></td>

                                <td>
                                 <a href="?action=editar&id_persona=<?php echo $r->id_persona; ?>">
                                    <span class="label label-success">Editar</span>
                                 </a>
                                    <a href="?action=eliminar&id_persona=<?php echo $r->id_persona; ?>"><span class="label label-danger">Eliminar</span></a>
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