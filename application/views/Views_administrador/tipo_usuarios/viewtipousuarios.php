<?php
    require_once 'application/controllers/Controller_administrador/cTipoUsuarios.php';
    require_once 'application/models/modelosAdministrador/mTipoUsuarios.php';

    // Logica
    $alm = new cTipoUsuarios();
    $model = new mTipoUsuarios();
?>
<section class="content">
    <div style="display: none;">
        <form action="?action=<?php echo $alm->id_tipo_usuarios > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detalles de Tipo de Usuarios</h3>
                    </div>
                    <div class="box-body">
                        <input type="hidden" name="id_tipo_usuarios" value="<?php echo $alm->__GET('id_tipo_usuarios'); ?>" />
                        <div class="form-group">
                            <label for="input3" class="col-sm-6 control-label">Descripción de Usuario</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="input3" placeholder="descripcion de usuario" name="descripcion_usuario" value="<?php echo $alm->__GET('descripcion_usuario'); ?>">
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
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Listado de Tipo de Usuarios</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Descripción</th>
                                
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo strtoupper($r->__GET('descripcion_usuario')); ?></td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>