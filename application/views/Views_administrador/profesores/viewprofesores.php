<?php

    require_once 'application/controllers/Controller_administrador/cProfesores.php';
    require_once 'application/models/modelosAdministrador/mProfesores.php';

    // Logica
    $alm = new cProfesores();
    $model = new  mProfesores();
?>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Listado de Datos Personales de los Empleados</h3>
                </div>
                <div class="box-body" style="overflow: auto">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 5%;">Matricula</th>
                                <th style="width: 5%;">Turno</th>
                                <th style="width: 5%;">Carrera</th>
                                <th style="width: 5%;">Usuario</th>
                                <th style="width: 5%;">Nombre</th>
                                <th style="width: 5%;">Paterno</th>
                                <th style="width: 5%;">Materno</th>
                                <th style="width: 5%;">Nacimiento</th>
                                <th style="width: 5%;">Sexo</th>
                                <th style="width: 5%;">Curp</th>
                                <th style="width: 5%;">Tel. Casa</th><!-- //10 -->
                                <th style="width: 5%;">Tel. Celular</th>
                                <th style="width: 5%;">Email</th>
                                <th style="width: 5%;">Calle</th>
                                <th style="width: 5%;">Número</th>
                                <th style="width: 5%;">Manzana/Lote</th>
                                <th style="width: 5%;">C.P.</th>
                                <th style="width: 5%;">Estado</th>
                                <th style="width: 5%;">Municipio</th> <!-- 20 -->
                                <th style="width: 5%;">Localidad</th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                        <tbody>
                            <tr>
                                <td><?php echo strtoupper($r->__GET('matricula')); ?></td>
                                <td><?php echo strtoupper($r->__GET('turno')); ?></td>
                                <td><?php echo strtoupper($r->__GET('nombreCarrera')); ?></td>
                                <td><?php echo strtoupper($r->__GET('usuario')); ?></td>
                                <td><?php echo strtoupper($r->__GET('nombrePersonal')); ?></td>
                                <td><?php echo strtoupper($r->__GET('ap_paterno')); ?></td>
                                <td><?php echo strtoupper($r->__GET('ap_materno')); ?></td>
                                <td><?php echo strtoupper($r->__GET('fecha_nacimiento')); ?></td>
                                <td><?php echo strtoupper($r->__GET('sexo')); ?></td>
                                <td><?php echo strtoupper($r->__GET('curp')); ?></td>
                                <td><?php echo strtoupper($r->__GET('telefonoCasa')); ?></td>
                                <td><?php echo strtoupper($r->__GET('telefonoCelular')); ?></td>
                                <td><?php echo strtoupper($r->__GET('email')); ?></td>
                                <td><?php echo strtoupper($r->__GET('calle')); ?></td>
                                <td><?php echo strtoupper($r->__GET('numero')); ?></td>
                                <td><?php echo strtoupper($r->__GET('manzana') . ' / ' . $r->__GET('lote')); ?></td>
                                <td><?php echo strtoupper($r->__GET('cp')); ?></td>
                                <td><?php echo strtoupper($r->__GET('nombreEstado')); ?></td>
                                <td><?php echo strtoupper($r->__GET('nombreMunicipio')); ?></td>
                                <td><?php echo strtoupper($r->__GET('nombreLocalidades')); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>