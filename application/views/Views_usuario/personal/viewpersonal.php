<?php

    require_once 'application/controllers/Controller_usuario/cPersonal.php';
    require_once 'application/models/modelosUsuario/mPersonal.php';

    // Logica
    $alm = new cPersonal();
    $model = new  mPersonal();

    if(isset($_REQUEST['action'])){
        switch($_REQUEST['action']){
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
                redirect(base_url(). 'Controller_usuario/personal');
                header('Location: viewpersonal.php');
            break;

            case 'editar':
                $alm = $model->Obtener($_REQUEST['id_persona']);
                break;
        }
    }
?>
  <!-- soloLetras/soloNumeros -->
  <script>
    function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       numeros = "0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }    
  </script>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Datos Escolares</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Turno</th>
                                <th>Carrera</th>
                                <th>Tipo de Usuario</th>                                
                            </tr>
                        </thead>
                        <?php 
                            //aqui envias la variable de session
                            $id_usu = $this->session->userdata('s_idUsuario');
                            foreach($model->Listar($id_usu) as $r): 
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo strtoupper($r->__GET('matricula')); ?></td>
                            <td><?php echo strtoupper($r->__GET('turno')); ?></td>
                            <td><?php echo strtoupper($r->__GET('id_carreras')); ?></td>
                            <td><?php echo strtoupper($r->__GET('id_tipo_usuarios')); ?></td>                            
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>                   
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Datos Personales</h3>
                </div>
                <div class="box-body" style="overflow: auto">                
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Paterno</th>
                                <th>Materno</th>
                                <th>Nacimiento</th>
                                <th>Sexo</th>
                                <th>Curp</th>
                                <th>Tel. Casa</th>
                                <th>Tel. Celular</th>
                                <th>Email</th>
                                <th>Licencia</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <?php 
                            //aqui envias la variable de session
                            $id_usu = $this->session->userdata('s_idUsuario');
                            foreach($model->Listar($id_usu) as $r): 
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo strtoupper($r->__GET('nombre')); ?></td>
                            <td><?php echo strtoupper($r->__GET('ap_paterno')); ?></td>
                            <td><?php echo strtoupper($r->__GET('ap_materno')); ?></td>
                            <td><?php echo strtoupper($r->__GET('fecha_nacimiento')); ?></td>
                            <td><?php echo strtoupper($r->__GET('sexo')); ?></td>
                            <td><?php echo strtoupper($r->__GET('curp')); ?></td>
                            <td><?php echo strtoupper($r->__GET('telefonoCasa')); ?></td>
                            <td><?php echo strtoupper($r->__GET('telefonoCelular')); ?></td>
                            <td><?php echo strtoupper($r->__GET('email')); ?></td>
                            <td><?php echo strtoupper($r->__GET('licencia')); ?></td>
                            <td>
                             <a href="?action=editar&id_persona=<?php echo $r->id_persona; ?>">
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
        $actual = 'localhost/sicautn/Controller_usuario/personal';
        if($url == $actual){
            //ocultas
    ?>
    <div class="row" style="display: none;">
    <?php        }else{    ?>
    <div class="row">
    <?php    }    ?>
        <div class="col-md-12"> 
            <form action="?action=<?php echo $alm->id_persona > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Detalles de Personal</h3>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="id_persona" value="<?php echo $alm->__GET('id_persona'); ?>" />
                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input4" placeholder="Nombre" name="nombre" value="<?php echo strtoupper($alm->__GET('nombre')); ?>" required maxlength="15" onkeypress="return soloLetras(event)">
                                </div>
                                <label for="input4" class="col-sm-2 control-label">Paterno</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input4" placeholder="Paterno" name="ap_paterno" value="<?php echo strtoupper($alm->__GET('ap_paterno')); ?>" required maxlength="15" onkeypress="return soloLetras(event)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label">Materno</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input4" placeholder="Materno" name="ap_materno" value="<?php echo strtoupper($alm->__GET('ap_materno')); ?>" required maxlength="15" onkeypress="return soloLetras(event)">
                                </div>
                                <label for="input4" class="col-sm-2 control-label">Fecha Nacimiento</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="input4" placeholder="01-01-2016" name="fecha_nacimiento" value="<?php echo $alm->__GET('fecha_nacimiento'); ?>" required maxlength="13">
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label">Teléfono Casa</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input4" placeholder="5512345678" name="telefonoCasa" value="<?php echo $alm->__GET('telefonoCasa'); ?>" required maxlength="10" onkeypress="return soloNumeros(event)">
                                </div>
                                <label for="input4" class="col-sm-2 control-label">Teléfono Celular</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input4" placeholder="5512345678" name="telefonoCelular" value="<?php echo $alm->__GET('telefonoCelular'); ?>" required maxlength="10" onkeypress="return soloNumeros(event)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="input4" placeholder="email" name="email" value="<?php echo $alm->__GET('email'); ?>" required>
                                </div>
                                <label for="input4" class="col-sm-2 control-label">Licencia</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input4" placeholder="licencia" name="licencia" value="<?php echo strtoupper($alm->__GET('licencia')); ?>" required maxlength="10">
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input1" placeholder="sexo" name="sexo" value="<?php echo $alm->__GET('sexo'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input2" placeholder="curp" name="curp" value="<?php echo $alm->__GET('curp'); ?>">
                                </div>                            
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input1" placeholder="matricula" name="matricula" value="<?php echo $alm->__GET('matricula'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input2" placeholder="turno" name="turno" value="<?php echo $alm->__GET('turno'); ?>">
                                </div>                            
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input1" placeholder="foto" name="foto" value="<?php echo $alm->__GET('foto'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input2" placeholder="id_tipo_usuarios" name="id_tipo_usuarios" value="<?php echo $alm->__GET('id_tipo_usuarios'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input4" placeholder="id_carreras" name="id_carreras" value="<?php echo $alm->__GET('id_carreras'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input4" placeholder="id_penalizaciones" name="id_penalizaciones" value="<?php echo $alm->__GET('id_penalizaciones'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input4" placeholder="id_vehiculo" name="id_vehiculo" value="<?php echo $alm->__GET('id_vehiculo'); ?>">
                                </div>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" id="input4" placeholder="id_direccion" name="id_direccion" value="<?php echo $alm->__GET('id_direccion'); ?>">
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