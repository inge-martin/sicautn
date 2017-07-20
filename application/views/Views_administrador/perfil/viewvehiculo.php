<?php
    require_once 'application/controllers/Controller_administrador/cVehiculo.php';
    require_once 'application/models/modelosAdministrador/mPerfil/mVehiculo.php';

    // Logica
    $almVehiculo = new cVehiculo();
    $modelVehiculo = new mVehiculo();

    if(isset($_REQUEST['action']))
    {
        switch($_REQUEST['action'])
        {
            case 'actualizar':
                $almVehiculo->__SET('id_vehiculo',              $_REQUEST['id_vehiculo']);
                $almVehiculo->__SET('placas',                   $_REQUEST['placas']);
                $almVehiculo->__SET('modelo',                   $_REQUEST['modelo']);
                $almVehiculo->__SET('color',                    $_REQUEST['color']);
                $almVehiculo->__SET('descripcion',              $_REQUEST['descripcion']);
                $almVehiculo->__SET('ano',                      $_REQUEST['ano']);
                $almVehiculo->__SET('foto_vehiculo',            $_REQUEST['foto_vehiculo']);


                $modelVehiculo->Actualizar($almVehiculo);
                //header('Location: viewvehiculo.php');
                redirect(base_url(). 'Controller_administrador/vehiculos');
                break;

            case 'registrar':
                $almVehiculo->__SET('id_vehiculo',              $_REQUEST['id_vehiculo']);
                $almVehiculo->__SET('placas',                   $_REQUEST['placas']);
                $almVehiculo->__SET('modelo',                   $_REQUEST['modelo']);
                $almVehiculo->__SET('color',                    $_REQUEST['color']);
                $almVehiculo->__SET('descripcion',              $_REQUEST['descripcion']);
                $almVehiculo->__SET('ano',                      $_REQUEST['ano']);
                $almVehiculo->__SET('foto_vehiculo',            $_REQUEST['foto_vehiculo']);

                $modelVehiculo->Registrar($almVehiculo);
                //header('Location: viewvehiculo.php');
                redirect(base_url(). 'Controller_administrador/vehiculos');
                break;

            case 'eliminar':
                $modelVehiculo->Eliminar($_REQUEST['id_vehiculo']);
                //header('Location: viewvehiculo.php');
                redirect(base_url(). 'Controller_administrador/vehiculos');
                break;

            case 'editar':
                $almVehiculo = $modelVehiculo->Obtener($_REQUEST['id_vehiculo']);
                break;
        }
    }
?>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Datos de Vehiculo</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Placas</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Descripción</th>
                                <th>Año</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <?php 
                            //aqui envias la variable de session
                            $id_usu = $this->session->userdata('s_idUsuario');
                            foreach($modelVehiculo->Listar($id_usu) as $r): 
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo strtoupper($r->__GET('placas')); ?></td>
                                <td><?php echo strtoupper($r->__GET('modelo')); ?></td>
                                <td><?php echo strtoupper($r->__GET('color')); ?></td>
                                <td><?php echo strtoupper($r->__GET('descripcion')); ?></td>
                                <td><?php echo strtoupper($r->__GET('ano')); ?></td>
                                <td>
                                 <a href="?action=editar&id_vehiculo=<?php echo $r->id_vehiculo; ?>">
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
        $actual = 'localhost/sicautn/Controller_administrador/vehiculos';
        if($url == $actual){
            //ocultas
    ?>
    <div class="row" style="display: none;">
    <?php        }else{    ?>
    <div class="row">
    <?php    }    ?>
        <div class="col-md-12"> 
            <form action="?action=<?php echo $almVehiculo->id_vehiculo > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Detalles de Vehiculo</h3>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="id_vehiculo" value="<?php echo $almVehiculo->__GET('id_vehiculo'); ?>" />
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label">Placas: </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input1" placeholder="Placas" name="placas" value="<?php echo strtoupper($almVehiculo->__GET('placas')); ?>" maxlength="10" required>
                                </div>
                                <label for="input2" class="col-sm-2 control-label">Modelo: </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input2" placeholder="Modelo" name="modelo" value="<?php echo strtoupper($almVehiculo->__GET('modelo')); ?>" maxlength="10" required>
                                </div>                        
                            </div>
                            <br/><br/>
                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label">Color: </label>
                                <div class="col-sm-4">
                                  <select class="form-control" name="color" required >
                                      <option value="<?php echo $almVehiculo->__GET('color'); ?>"><?php echo $almVehiculo->__GET('color'); ?></option>
                                      <option value="Rojo"     style="background:red">Rojo</option>
                                      <option value="Negro"    style="background:black">Negro</option>
                                      <option value="Blanco"   style="background:white">Blanco</option>
                                      <option value="Azul"     style="background:blue">Azul</option>
                                      <option value="Verde"    style="background:green">Verde</option>
                                      <option value="Amarillo" style="background:yellow">Amarillo</option>
                                      <option value="Morado"   style="background:purple">Morado</option>
                                  </select>                                                  
                                </div>
                                <label for="input4" class="col-sm-2 control-label">Descripción: </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input4" placeholder="Descripción" name="descripcion" value="<?php echo strtoupper($almVehiculo->__GET('descripcion')); ?>" maxlength="100" required>
                                </div>
                            </div>
                            <br/><br/>
                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label">Año: </label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="input4" placeholder="Año" name="ano" value="<?php echo $almVehiculo->__GET('ano'); ?>-01-01" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input1" placeholder="foto" name="foto_vehiculo" value="<?php echo $almVehiculo->__GET('foto_vehiculo'); ?>">
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