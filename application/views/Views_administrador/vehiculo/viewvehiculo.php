<?php
    require_once 'application/controllers/Controller_administrador/cVehiculo.php';
    require_once 'application/models/modelosAdministrador/mVehiculo.php';

    $alm = new cVehiculo();
    $model = new mVehiculo();
?>

<section class="content">
    <div style="display: none;">
        <form action="?action=<?php echo $alm->id_vehiculo > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detalles de Vehiculo</h3>
                    </div>
                    <div class="box-body">
                        <input type="hidden" name="id_vehiculo" value="<?php echo $alm->__GET('id_vehiculo'); ?>" />
                        <div class="form-group">
                            <label for="input1" class="col-sm-2 control-label">Placas: </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input1" placeholder="Placas" name="placas" value="<?php echo $alm->__GET('placas'); ?>">
                            </div>
                            <label for="input2" class="col-sm-2 control-label">Modelo: </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input2" placeholder="Modelo" name="modelo" value="<?php echo $alm->__GET('modelo'); ?>">
                            </div>                        
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <label for="input4" class="col-sm-2 control-label">Color: </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input4" placeholder="Color" name="color" value="<?php echo $alm->__GET('color'); ?>">
                            </div>
                            <label for="input4" class="col-sm-2 control-label">Descripción: </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input4" placeholder="Descripción" name="descripcion" value="<?php echo $alm->__GET('descripcion'); ?>">
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <label for="input4" class="col-sm-2 control-label">Año: </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input4" placeholder="Año" name="ano" value="<?php echo $alm->__GET('ano'); ?>">
                            </div>
                            <label for="input4" class="col-sm-2 control-label">Foto: </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input4" placeholder="Foto" name="foto_vehiculo" value="<?php echo $alm->__GET('foto_vehiculo'); ?>">
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

    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Listado de Vehiculos Registrados</h3>
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
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo strtoupper($r->__GET('placas')); ?></td>
                                <td><?php echo strtoupper($r->__GET('modelo')); ?></td>
                                <td><?php echo strtoupper($r->__GET('color')); ?></td>
                                <td><?php echo strtoupper($r->__GET('descripcion')); ?></td>
                                <td><?php echo strtoupper($r->__GET('ano')); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>